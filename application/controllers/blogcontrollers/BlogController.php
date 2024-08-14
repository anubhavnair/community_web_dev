<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 * @property Blog_model $Blog_model
 * @property input $input
 * @property upload $upload
 * @property session $session
 */
class BlogController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Blog_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('blog/add_blog_section');
		$data['blogs'] = $this->Blog_model->get_all_blog_posts();
		$this->load->view('blog/blog_test', $data);
		$this->load->view('footer');
	}

	public function blog_details($id)
	{


		$blog['blog'] = $this->Blog_model->getSinglePost($id);

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('blog/blog_detail',$blog);
		$this->load->view('footer');
	}

	public function increseLike()
	{
		$post_id = $this->input->post('id');
		
		$this->Blog_model->increaseLike($post_id);
		

	}


	public function add_blog()
	{
		$this->load->library('upload');
		$this->load->database(); // Load the database library

		$files = $_FILES;
		$cpt = count($_FILES['blog_image']['name']);

		// Capture the blog caption
		$blogCaption = $this->input->post('blog_caption');

		$imageName = [];

		for ($i = 0; $i < $cpt; $i++) {
			// Get the original file name
			$originalName = $_FILES['blog_image']['name'][$i];
			$fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);

			// Sanitize the file name
			$sanitizedFileName = $this->sanitizeFileName(pathinfo($originalName, PATHINFO_FILENAME));

			// Create a unique file name with timestamp and sanitized file name
			$uniqueName = time() . '_' . $sanitizedFileName . '.' . $fileExtension;

			// Prepare the $_FILES array for the single file upload
			$_FILES['single_image']['name'] = $uniqueName;
			$_FILES['single_image']['type'] = $files['blog_image']['type'][$i];
			$_FILES['single_image']['tmp_name'] = $files['blog_image']['tmp_name'][$i];
			$_FILES['single_image']['error'] = $files['blog_image']['error'][$i];
			$_FILES['single_image']['size'] = $files['blog_image']['size'][$i];

			// Initialize upload configurations
			$this->upload->initialize($this->set_upload_options());

			// Attempt to upload the file
			if ($this->upload->do_upload('single_image')) {
				$uploadData = $this->upload->data();
				$fileName = $uploadData['file_name'];

				// Add the uploaded file name to the list
				$imageName[] = $fileName;
			} else {
				$error = $this->upload->display_errors();
				// Handle errors if needed
				// redirect("/blog");
			}
		}

		// Combine all image names into a single string
		$imageNames = implode(',', $imageName);

		$isInserted = $this->Blog_model->add_blog($imageNames, $blogCaption);
		if ($isInserted) {
			$this->session->set_flashdata('added_blog', 'Blog Added Successfully');
			redirect("/blog");
		} else {
			$this->session->set_flashdata('error_blog', 'There Is an Error');
			redirect("/blog");
		}
	}



	public function set_upload_options()
	{
		$config['upload_path'] = './uploads/blog_images';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['remove_spaces'] = true;
		return $config;
	}

	function sanitizeFileName($filename)
	{
		// Remove any characters that are not letters, numbers, dashes, or underscores
		$filename = preg_replace('/[^a-zA-Z0-9_-]/', '_', $filename);
		return $filename;
	}

}
