<style>
    .container {
        margin: 20px;
    }

    .alert {
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .alert-info {
        background-color: #d9edf7;
        color: #31708f;
    }

    .alert-warning {
        background-color: #fcf8e3;
        color: #8a6d3b;
    }
</style>
<div class="container-fluid">
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info text-center">
            <?= $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>

    <!-- <pre><?php print_r($request_status); ?></pre> -->


    <?php if (is_null($request_status)): ?>
        <div class="alert text-center">
            <h2>Send Request to <b><?= $matrimonial_profile['user_name']; ?></b></h2>
            <form action="<?= base_url('matrimonialcontrollers/MatriMonialController/send_request'); ?>" method="post">
                <input type="hidden" name="matrimonial_id" value="<?= $matrimonial_profile['uid']; ?>">
                <button type="submit" class="btn btn-primary">Send Request</button>
            </form>
        </div>
    <?php elseif ($request_status['request_status'] == 1): ?>
        <div class="alert alert-info text-center">
            Your request is pending.
        </div>
    <?php else: ?>
        <!-- Handle other cases if necessary -->
    <?php endif; ?>

</div>