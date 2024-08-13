<style>
    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    #height-slider {
        margin: 20px 0;
    }

    .t-h {
        display: flex;
        justify-content: space-between;
    }

    .h1-h,
    .h2-h {
        font-size: 1rem;
    }


    .s-all,
    .clear-all {
        cursor: pointer;
    }

    .rotate-icon {
        transition: transform 0.3s ease;
    }

    .rotate-icon.rotate {
        transform: rotate(180deg);
    }
</style>
<!-- Sidebar for search filters -->
<div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
    <select class="form-control select-cust" style="height:35px;margin-top: 20px;width:60%;" name="search_order"
        id="search_order" onchange="change_sort()">
        <option selected="" value="latest_first" class="color-30">Latest First</option>
        <option value="latest_last" class="color-65">Oldest First</option>
        <option value="last_login_first" class="color-65">Latest Login First</option>
        <option value="last_login_last" class="color-65">Last Login First</option>
    </select>

    <div class="mt-5">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 pr-0">
                <div class="fr-main">
                    <div class="hidden-sm hidden-xs">
                        <p class="fr-cptn1 OpenSans-Regular"><i class="fas fa-sliders-h fr-slider"></i>Member
                            Filter</p>
                    </div>
                    <div class="row pt-0">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form class="light pt-0" action="https://shaadi.telisahusamaj.in/search/search_now"
                                name="keyword_search_form" id="keyword_search_form" method="post">
                                <input type="text" placeholder="Search by Keywords" required="" name="keyword" value=""
                                    id="keyword">
                                <button type="submit" class="btn btn-primary filter-btn"
                                    onclick="member_Filter()">Search <i class="fa fa-search fr-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="row margin-top-10">
                        <div class="col-md-12 col-sm-12 col-xs-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <hr class="fr hr3">
                        </div>
                    </div>
                    <form name="frm_filter" id="frm_filter" method="post">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p class="fr-height fw-bold">Gender</p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p class="radio-custm">
                                    <input type="radio" id="M" onclick="member_Filter()" value="Male" name="gender">
                                    <label for="M" class="lbl1">Male</label>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p class="radio-custm">
                                    <input type="radio" id="F" onclick="member_Filter()" value="Female" name="gender"
                                        checked="">
                                    <label for="F" class="lbl1">Female</label>
                                </p>
                            </div>
                        </div>
                        <hr class="fr hr3">

                        <!--height slider range-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="fr-height OpenSans-Bold">Height</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Slider container -->
                                <div id="height-slider"></div>
                                <div class="t-h">
                                    <span class="h1-h">
                                        <span id="from_height_display">4 ft</span>
                                        <input type="hidden" name="from_height" id="from_height" value="48">
                                    </span>
                                    <span class="h2-h float-end">
                                        <span id="to_height_display">7 ft</span>
                                        <input type="hidden" name="to_height" id="to_height" value="84">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr class="fr hr3">

                        <!--end range height slider-->
                        <!--age slier range-->
                        <div class="row margin-top-10">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="fr-height OpenSans-Bold">Age</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Slider container -->
                                <div id="age-slider"></div>
                                <div class="t-h">
                                    <span class="h1-h">
                                        <span id="from_age_display">18 Year</span>
                                        <input type="hidden" name="from_age" id="from_age" value="18">
                                    </span>
                                    <span class="h2-h float-end">
                                        <span id="to_age_display">65 Year</span>
                                        <input type="hidden" name="to_age" id="to_age" value="65">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr class="fr hr3">
                        <!--end range age slider-->

                        <!-- caste  -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsecaste"
                                            aria-expanded="false" aria-controls="collapsecaste">

                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Caste
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('list_disp_caste')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('list_disp_caste');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapsecaste" class="collapse" role="tabpanel"
                                    aria-labelledby="collapsecaste">
                                    <div class="bg-color">
                                        <div class="content" id="list_disp_caste">
                                            <div class="box">
                                                <!-- Example Checkboxes -->
                                                <?php
                                                if (!empty($castes)) {
                                                    foreach ($castes as $caste) {
                                                        ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="caste"
                                                                data-caste-id="<?= $caste->id ?>">
                                                            <label class="form-check-label" for="caste1">
                                                                <?= $caste->caste ?>
                                                            </label>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end cast  -->
                        <!-- state -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseState"
                                            aria-expanded="false" aria-controls="collapseState">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            State
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('list_disp_state')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('list_disp_state');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseState" class="collapse" role="tabpanel"
                                    aria-labelledby="collapseState">
                                    <div class="bg-color overflow-auto" style="max-height:200px">
                                        <div class="position-sticky top-0">
                                            <input type="text" class="form-control search-box" id="searchState"
                                                placeholder="Search State">
                                        </div>
                                        <div class="content" id="list_disp_state">
                                            <div class="box">
                                                <?php
                                                if (!empty($states)) {
                                                    foreach ($states as $state) {
                                                        ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                data-state-id="<?= $state->state_id ?>">
                                                            <label class="form-check-label" for="caste1">
                                                                <?= $state->state ?>
                                                            </label>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end state -->

                        <!-- city -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseCity"
                                            aria-expanded="false" aria-controls="collapseCity">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            City
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('city_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('city_list');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseCity" class="collapse" role="tabpanel" aria-labelledby="collapseCity">
                                    <div class="bg-color">
                                        <input type="text" class="form-control search-box" id="searchCity"
                                            placeholder="Search City">
                                        <div class="content city_list">
                                            <div class="box">
                                                <!-- Example Checkboxes -->
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="city_id_1" value="1" name="city[]"
                                                        class="city">
                                                    <label for="city_id_1" class="lbl1 lbl-break">City 1</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="city_id_2" value="2" name="city[]"
                                                        class="city">
                                                    <label for="city_id_2" class="lbl1 lbl-break">City 2</label>
                                                </p>
                                            </div>
                                            <!-- Add more cities as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end city -->

                        <!-- mother tongue -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseMotherTongue"
                                            aria-expanded="false" aria-controls="collapseMotherTongue">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Mother Tongue
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('mothertongue_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('mothertongue_list');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseMotherTongue" class="collapse" role="tabpanel"
                                    aria-labelledby="collapseMotherTongue">
                                    <div class="bg-color">
                                        <input type="text" class="form-control search-box" id="searchMotherTongue"
                                            placeholder="Search Mother Tongue">
                                        <div class="content mothertongue_list">
                                            <div class="box">
                                                <!-- Example Checkboxes -->
                                                <?php
                                                if (!empty($motherTongues)) {
                                                    foreach ($motherTongues as $motherTongue) {
                                                        ?>
                                                <p class="checkbox-m">

                                                            <input class="form-check-input mothertongue_list" type="checkbox" value=""
                                                                data-mother-tongue-id="<?= $motherTongue->motherTongue_id ?>">
                                                            <label class="form-check-label" for="mother_tongue">
                                                                <?= $motherTongue->motherTongue ?>
                                                            </label>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of mother tongue -->
                        <!-- Education -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEducation"
                                            aria-expanded="false" aria-controls="collapseEducation">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Education
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('education_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('education_list')">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseEducation" class="collapse" role="tabpanel"
                                    aria-labelledby="collapseEducation">
                                    <div class="bg-color">
                                        <input type="text" class="form-control search-box" id="searchEducation"
                                            placeholder="Search Education">
                                        <div class="content education_list">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="education_id_9" value="9"
                                                        name="education[]" class="education-checkbox">
                                                    <label for="education_id_9" class="lbl1 lbl-break">B Arch</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end education -->


                        <!-- annual income  --><!-- Annual Income -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseIncome"
                                            aria-expanded="false" aria-controls="collapseIncome">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Annual Income
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('income_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('income_list')">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseIncome" class="collapse" role="tabpanel"
                                    aria-labelledby="collapseIncome">
                                    <div class="bg-color">
                                        <div class="content income_list">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs10000-50000" type="checkbox"
                                                        value="Rs 10,000 - 50,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs10000-50000" class="lbl1 lbl-break">Rs
                                                        10,000 - 50,000</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs50000-100000" type="checkbox"
                                                        value="Rs 50,000 - 1,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs50000-100000" class="lbl1 lbl-break">Rs
                                                        50,000 - 1,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs100000-200000" type="checkbox"
                                                        value="Rs 1,00,000 - 2,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs100000-200000" class="lbl1 lbl-break">Rs
                                                        1,00,000 - 2,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs200000-500000" type="checkbox"
                                                        value="Rs 2,00,000 - 5,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs200000-500000" class="lbl1 lbl-break">Rs
                                                        2,00,000 - 5,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs500000-1000000" type="checkbox"
                                                        value="Rs 5,00,000 - 10,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs500000-1000000" class="lbl1 lbl-break">Rs
                                                        5,00,000 - 10,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs1000000-5000000" type="checkbox"
                                                        value="Rs 10,00,000 - 50,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs1000000-5000000" class="lbl1 lbl-break">Rs
                                                        10,00,000 - 50,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs5000000-10000000" type="checkbox"
                                                        value="Rs 50,00,000 - 1,00,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_Rs5000000-10000000" class="lbl1 lbl-break">Rs
                                                        50,00,000 - 1,00,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_AboveRs10000000" type="checkbox"
                                                        value="Above Rs 1,00,00,000" name="income[]"
                                                        class="income-checkbox">
                                                    <label for="income_id_AboveRs10000000" class="lbl1 lbl-break">Above
                                                        Rs 1,00,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Doesnotmatter" type="checkbox"
                                                        value="Does not matter" name="income[]" class="income-checkbox">
                                                    <label for="income_id_Doesnotmatter" class="lbl1 lbl-break">Does not
                                                        matter</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Annual Income -->
                        <!-- Employee In -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEmployeeIn"
                                            aria-expanded="false" aria-controls="collapseEmployeeIn">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Employee In
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('employee_in_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('employee_in_list')">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseEmployeeIn" class="collapse" role="tabpanel"
                                    aria-labelledby="collapseEmployeeIn">
                                    <div class="bg-color">
                                        <input type="text" id="employee_in_search" class="form-control"
                                            placeholder="Search...">
                                        <div class="content employee_in_list">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Private" type="checkbox" value="Private"
                                                        name="employee_in[]" class="employee_in">
                                                    <label for="employee_in_id_Private"
                                                        class="lbl1 lbl-break">Private</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Government" type="checkbox"
                                                        value="Government" name="employee_in[]" class="employee_in">
                                                    <label for="employee_in_id_Government"
                                                        class="lbl1 lbl-break">Government</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Business" type="checkbox" value="Business"
                                                        name="employee_in[]" class="employee_in">
                                                    <label for="employee_in_id_Business"
                                                        class="lbl1 lbl-break">Business</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Defence" type="checkbox" value="Defence"
                                                        name="employee_in[]" class="employee_in">
                                                    <label for="employee_in_id_Defence"
                                                        class="lbl1 lbl-break">Defence</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_NotEmployedin" type="checkbox"
                                                        value="Not Employed in" name="employee_in[]"
                                                        class="employee_in">
                                                    <label for="employee_in_id_NotEmployedin" class="lbl1 lbl-break">Not
                                                        Employed in</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_PublicSector" type="checkbox"
                                                        value="Public Sector" name="employee_in[]" class="employee_in">
                                                    <label for="employee_in_id_PublicSector"
                                                        class="lbl1 lbl-break">Public Sector</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Others" type="checkbox" value="Others"
                                                        name="employee_in[]" class="employee_in">
                                                    <label for="employee_in_id_Others"
                                                        class="lbl1 lbl-break">Others</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-bs-toggle="modal" href="#more-employee_in">
                                                    <span class="checkbox-m more OpenSans-Bold">
                                                        + 7 more
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Employee In -->

                        <!-- Profile Picture -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist" id="headingprof">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseProfilePicture"
                                            aria-expanded="false" aria-controls="collapseProfilePicture">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Profile Picture
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('profile_picture_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('profile_picture_list')">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseProfilePicture" class="collapse" role="tabpanel"
                                    aria-labelledby="headingprof">
                                    <div class="bg-color">
                                        <div class="content profile_picture_list">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="photo_search" type="checkbox" value="photo_search"
                                                        name="photo_search" class="profile_picture">
                                                    <label for="photo_search" class="lbl1 lbl-break">With
                                                        Picture</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Profile Picture -->

                        <!-- Complexion -->
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <button class="btn d-flex align-items-center" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseComplexion"
                                            aria-expanded="false" aria-controls="collapseComplexion">
                                            <i class="fa fa-chevron-down ms-2 rotate-icon" aria-hidden="true"></i>
                                            &nbsp;
                                            Complexion
                                        </button>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('complexion_list')">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('complexion_list')">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseComplexion" class="collapse" role="tabpanel"
                                    aria-labelledby="collapseComplexion">
                                    <div class="bg-color">
                                        <div class="content">
                                            <div class="box">
                                                <input type="text" id="complexion_search" class="form-control"
                                                    placeholder="Search Complexion">
                                            </div>
                                            <div class="complexion_list">
                                                <div class="box">
                                                    <p class="checkbox-m">
                                                        <input id="complexion_0" type="checkbox" value="Wheatish"
                                                            name="complexion[]" class="complexion">
                                                        <label for="complexion_0"
                                                            class="lbl1 lbl-break">Wheatish</label>
                                                    </p>
                                                </div>
                                                <div class="box">
                                                    <p class="checkbox-m">
                                                        <input id="complexion_1" type="checkbox" value="Very Fair"
                                                            name="complexion[]" class="complexion">
                                                        <label for="complexion_1" class="lbl1 lbl-break">Very
                                                            Fair</label>
                                                    </p>
                                                </div>
                                                <div class="box">
                                                    <p class="checkbox-m">
                                                        <input id="complexion_2" type="checkbox" value="Fair"
                                                            name="complexion[]" class="complexion">
                                                        <label for="complexion_2" class="lbl1 lbl-break">Fair</label>
                                                    </p>
                                                </div>
                                                <div class="box">
                                                    <p class="checkbox-m">
                                                        <input id="complexion_3" type="checkbox" value="Wheatish Brown"
                                                            name="complexion[]" class="complexion">
                                                        <label for="complexion_3" class="lbl1 lbl-break">Wheatish
                                                            Brown</label>
                                                    </p>
                                                </div>
                                                <div class="box">
                                                    <p class="checkbox-m">
                                                        <input id="complexion_4" type="checkbox" value="Dark"
                                                            name="complexion[]" class="complexion">
                                                        <label for="complexion_4" class="lbl1 lbl-break">Dark</label>
                                                    </p>
                                                </div>
                                                <div class="box">
                                                    <p class="checkbox-m">
                                                        <input id="complexion_5" type="checkbox" value="Wheatish Medium"
                                                            name="complexion[]" class="complexion">
                                                        <label for="complexion_5" class="lbl1 lbl-break">Wheatish
                                                            Medium</label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Complexion -->
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>