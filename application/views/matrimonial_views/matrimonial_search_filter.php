<style>
    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
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
                                <input type="text" placeholder="Search by Keywords" required="" name="keyword" value="">
                                <button type="submit" class="btn btn-primary filter-btn">Search <i
                                        class="fa fa-search fr-search"></i></button>
                                <input type="hidden" name="csrf_new_matrimonial"
                                    value="6a9b261e28b0f8e393763714eadc14ab" id="hash_tocken_id">
                                <input type="hidden" name="search_page_nm" value="Keyword Search">
                                <input type="hidden" name="save_search" id="save_search" value="">
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
                        <input type="hidden" name="csrf_new_matrimonial" value="6a9b261e28b0f8e393763714eadc14ab"
                            class="hash_tocken_id">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p class="fr-height fw-bold">Gender</p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p class="radio-custm">
                                    <input type="radio" id="w-male" onclick="refine_search()" value="Male"
                                        name="gender">
                                    <label for="w-male" class="lbl1">Male</label>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p class="radio-custm">
                                    <input type="radio" id="w-fmale" onclick="refine_search()" value="Female"
                                        name="gender" checked="">
                                    <label for="w-fmale" class="lbl1">Female</label>
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
                            <div class="range-slider">
                                <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span
                                                class="irs-line-left"></span><span class="irs-line-mid"></span><span
                                                class="irs-line-right"></span></span><span class="irs-min"
                                            style="display: none; visibility: hidden;">0</span><span class="irs-max"
                                            style="display: none; visibility: hidden;">1</span><span class="irs-from"
                                            style="visibility: visible; left: 0%;">4-2
                                            ft</span><span class="irs-to"
                                            style="visibility: visible; left: 82.3322%;">7-1 ft</span><span
                                            class="irs-single" style="visibility: hidden; left: 30.742%;">4-2 ft
                                            to 7-1
                                            ft</span></span><span class="irs-grid"></span><span class="irs-bar"
                                        style="left: 2.82686%; width: 91.7256%;"></span><span
                                        class="irs-shadow shadow-from" style="display: none;"></span><span
                                        class="irs-shadow shadow-to" style="display: none;"></span><span
                                        class="irs-slider from" style="left: 0%;"></span><span
                                        class="irs-slider to type_last" style="left: 91.7256%;"></span></span><input
                                    type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                            </div>
                            <div class="t-h">
                                <span class="h1-h">
                                    4 ft
                                    <input type="hidden" name="from_height" id="from_height" value="48">
                                </span>
                                <span class="h2-h float-end">
                                    7 Above ft
                                    <input type="hidden" name="to_height" id="to_height" value="85">
                                </span>
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
                            <div class="range-slider">
                                <span class="irs js-irs-2"><span class="irs"><span class="irs-line" tabindex="-1"><span
                                                class="irs-line-left"></span><span class="irs-line-mid"></span><span
                                                class="irs-line-right"></span></span><span class="irs-min"
                                            style="visibility: hidden;">18<span></span></span><span class="irs-max"
                                            style="visibility: visible;">65<span></span></span><span class="irs-from"
                                            style="visibility: visible; left: 0%;">18<span></span></span><span
                                            class="irs-to"
                                            style="visibility: visible; left: 21.2616%;">30<span></span></span><span
                                            class="irs-single"
                                            style="visibility: hidden; left: 4.97707%;">18<span></span> -
                                            30<span></span></span></span><span class="irs-grid"></span><span
                                        class="irs-bar" style="left: 2.82686%; width: 24.0884%;"></span><span
                                        class="irs-shadow shadow-from" style="display: none;"></span><span
                                        class="irs-shadow shadow-to" style="display: none;"></span><span
                                        class="irs-slider from" style="left: 0%;"></span><span
                                        class="irs-slider to type_last" style="left: 24.0884%;"></span></span><input
                                    type="text" class="js-range-slider-2 irs-hidden-input" value="" readonly="">
                            </div>
                            <div class="t-h">
                                <span class="h1-h">
                                    18 Year
                                    <input type="hidden" name="from_age" id="from_age" value="18">
                                </span>
                                <span class="h2-h float-end">
                                    65 Year
                                    <input type="hidden" name="to_age" id="to_age" value="30">
                                </span>
                            </div>
                        </div>
                        <!--end range age slider-->

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapsecaste" aria-expanded="false"
                                            aria-controls="collapsecaste">
                                            Caste
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('caste');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('caste');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapsecaste" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapsecaste">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content" id="list_disp_caste">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    First Select Religion
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseeight" aria-expanded="false"
                                            aria-controls="collapseeight">
                                            State
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('state');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('state');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapseeight">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content" id="list_disp_state">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    First Select Country
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseseven" aria-expanded="false"
                                            aria-controls="collapseseven">
                                            City
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('country');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('country');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapseseven">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content country_list">
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="country_id_150" value="150"
                                                        onclick="getlist_onchange('country','state')" name="country[]"
                                                        class="country">
                                                    <label for="country_id_150" class="lbl1 lbl-break">Algeria</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-toggle="modal" href="#more-country">
                                                    <span class="checkbox-m more OpenSans-Bold">
                                                        + 13 more
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapsefive" aria-expanded="false"
                                            aria-controls="collapsefive">
                                            Mother Tongue
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('mothertongue');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('mothertongue');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapsefive">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_18" value="18"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_18"
                                                        class="lbl1 lbl-break">Assamese</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_19" value="19"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_19"
                                                        class="lbl1 lbl-break">Awadhi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_10" value="10"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_10"
                                                        class="lbl1 lbl-break">Bengali</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_20" value="20"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_20"
                                                        class="lbl1 lbl-break">Bhojpuri</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_21" value="21"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_21"
                                                        class="lbl1 lbl-break">Bhutia</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_22" value="22"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_22"
                                                        class="lbl1 lbl-break">Chatlisgarhi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_24" value="24"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_24" class="lbl1 lbl-break">Dogri</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_5" value="5"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_5"
                                                        class="lbl1 lbl-break">English</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_26" value="26"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_26"
                                                        class="lbl1 lbl-break">Garhwali</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_27" value="27"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_27" class="lbl1 lbl-break">Garo</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_3" value="3"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_3"
                                                        class="lbl1 lbl-break">Gujarati</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_28" value="28"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_28"
                                                        class="lbl1 lbl-break">Haryanvi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_58" value="58"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_58" class="lbl1 lbl-break">Hindi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_29" value="29"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_29"
                                                        class="lbl1 lbl-break">Kakbarak</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_30" value="30"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_30"
                                                        class="lbl1 lbl-break">Kanauji</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_11" value="11"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_11"
                                                        class="lbl1 lbl-break">Kannada</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_31" value="31"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_31"
                                                        class="lbl1 lbl-break">Kashmiri</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_32" value="32"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_32"
                                                        class="lbl1 lbl-break">Khandesi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_33" value="33"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_33" class="lbl1 lbl-break">Khasi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_13" value="13"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_13"
                                                        class="lbl1 lbl-break">Konkani</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_34" value="34"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_34"
                                                        class="lbl1 lbl-break">Koshali</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_35" value="35"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_35"
                                                        class="lbl1 lbl-break">Kumoani</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_36" value="36"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_36"
                                                        class="lbl1 lbl-break">Kutchi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_37" value="37"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_37"
                                                        class="lbl1 lbl-break">Lepcha</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_38" value="38"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_38"
                                                        class="lbl1 lbl-break">Magahi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_39" value="39"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_39"
                                                        class="lbl1 lbl-break">Maithili</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_40" value="40"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_40" class="lbl1 lbl-break">Malay</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_9" value="9"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_9"
                                                        class="lbl1 lbl-break">Malayalam</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_7" value="7"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_7"
                                                        class="lbl1 lbl-break">Marathi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_16" value="16"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_16"
                                                        class="lbl1 lbl-break">Marwadi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_41" value="41"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_41" class="lbl1 lbl-break">Miji</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_42" value="42"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_42" class="lbl1 lbl-break">Mizo</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_43" value="43"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_43" class="lbl1 lbl-break">Monpa</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_44" value="44"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_44"
                                                        class="lbl1 lbl-break">Nepali</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_14" value="14"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_14" class="lbl1 lbl-break">Oriya</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_88" value="88"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_88" class="lbl1 lbl-break">Other</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_45" value="45"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_45"
                                                        class="lbl1 lbl-break">Persian</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_6" value="6"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_6"
                                                        class="lbl1 lbl-break">Punjabi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_46" value="46"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_46"
                                                        class="lbl1 lbl-break">Rajasthani</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_48" value="48"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_48"
                                                        class="lbl1 lbl-break">Sanskrit</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_49" value="49"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_49"
                                                        class="lbl1 lbl-break">Santhali</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_12" value="12"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_12"
                                                        class="lbl1 lbl-break">Sindhi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_55" value="55"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_55"
                                                        class="lbl1 lbl-break">Sindhi</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_50" value="50"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_50"
                                                        class="lbl1 lbl-break">Spanish</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_52" value="52"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_52"
                                                        class="lbl1 lbl-break">Tagalog</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_1" value="1"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_1" class="lbl1 lbl-break">Tamil</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_8" value="8"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_8" class="lbl1 lbl-break">Telugu</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input type="checkbox" id="mothertongue_id_64" value="64"
                                                        name="mothertongue[]" onclick="refine_search()"
                                                        class="mothertongue">
                                                    <label for="mothertongue_id_64" class="lbl1 lbl-break">Tulu</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-toggle="modal" href="#more-mothertongue">
                                                    <span class="checkbox-m more OpenSans-Bold">
                                                        + 48 more
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseeleven" aria-expanded="false"
                                            aria-controls="collapseeleven">
                                            Education
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('education');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('education');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseeleven" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapseeleven">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_9" type="checkbox" value="9"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_9" class="lbl1 lbl-break">B
                                                        Arch</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_15" type="checkbox" value="15"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_15" class="lbl1 lbl-break">B
                                                        Phil</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_10" type="checkbox" value="10"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_10" class="lbl1 lbl-break">B
                                                        Plan</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_12" type="checkbox" value="12"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_12" class="lbl1 lbl-break">B
                                                        Tech</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_60" type="checkbox" value="60"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_60" class="lbl1 lbl-break">B.Pharm</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_17" type="checkbox" value="17"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_17" class="lbl1 lbl-break">BA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_87" type="checkbox" value="87"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_87" class="lbl1 lbl-break">Bachelor
                                                        Of
                                                        Engineering</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_67" type="checkbox" value="67"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_67" class="lbl1 lbl-break">Bachelor
                                                        Of Law</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_90" type="checkbox" value="90"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_90" class="lbl1 lbl-break">Bachelor
                                                        of Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_54" type="checkbox" value="54"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_54" class="lbl1 lbl-break">Bachelor
                                                        Of Veterinary
                                                        Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_132" type="checkbox" value="132"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_132" class="lbl1 lbl-break">Bachelors in
                                                        Arts</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_128" type="checkbox" value="128"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_128" class="lbl1 lbl-break">Bachelors in
                                                        Commerce</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_131" type="checkbox" value="131"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_131" class="lbl1 lbl-break">Bachelors In
                                                        Computers</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_133" type="checkbox" value="133"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_133" class="lbl1 lbl-break">Bachelors in
                                                        Education</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_129" type="checkbox" value="129"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_129" class="lbl1 lbl-break">Bachelors in
                                                        Engineering</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_138" type="checkbox" value="138"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_138" class="lbl1 lbl-break">Bachelors in
                                                        Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_137" type="checkbox" value="137"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_137" class="lbl1 lbl-break">Bachelors in
                                                        Technology</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_52" type="checkbox" value="52"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_52" class="lbl1 lbl-break">BAMS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_25" type="checkbox" value="25"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_25" class="lbl1 lbl-break">BBA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_8" type="checkbox" value="8"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_8" class="lbl1 lbl-break">BCA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_48" type="checkbox" value="48"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_48" class="lbl1 lbl-break">BDS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_11" type="checkbox" value="11"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_11" class="lbl1 lbl-break">BE</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_22" type="checkbox" value="22"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_22" class="lbl1 lbl-break">BEd</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_18" type="checkbox" value="18"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_18" class="lbl1 lbl-break">BFA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_26" type="checkbox" value="26"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_26" class="lbl1 lbl-break">BFM
                                                        (Financial Management)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_66" type="checkbox" value="66"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_66" class="lbl1 lbl-break">BGL</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_24" type="checkbox" value="24"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_24" class="lbl1 lbl-break">BHM</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_50" type="checkbox" value="50"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_50" class="lbl1 lbl-break">BHMS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_19" type="checkbox" value="19"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_19" class="lbl1 lbl-break">BLIS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_21" type="checkbox" value="21"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_21" class="lbl1 lbl-break">BMM
                                                        (MASS MEDIA)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_58" type="checkbox" value="58"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_58" class="lbl1 lbl-break">BPT</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_13" type="checkbox" value="13"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_13" class="lbl1 lbl-break">BSc
                                                        Computer Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_14" type="checkbox" value="14"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_14" class="lbl1 lbl-break">BSc
                                                        IT</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_62" type="checkbox" value="62"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_62" class="lbl1 lbl-break">BSc
                                                        Nursing</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_20" type="checkbox" value="20"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_20" class="lbl1 lbl-break">BSW</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_72" type="checkbox" value="72"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_72" class="lbl1 lbl-break">CA
                                                        Final</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_71" type="checkbox" value="71"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_71" class="lbl1 lbl-break">CA
                                                        Inter</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_75" type="checkbox" value="75"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_75" class="lbl1 lbl-break">CFA
                                                        (Chartered Financial Analyst)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_134" type="checkbox" value="134"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_134" class="lbl1 lbl-break">Chartered
                                                        Accountant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_95" type="checkbox" value="95"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_95" class="lbl1 lbl-break">CNC
                                                        OP</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_118" type="checkbox" value="118"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_118" class="lbl1 lbl-break">Company
                                                        Secretary</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_74" type="checkbox" value="74"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_74" class="lbl1 lbl-break">Company
                                                        Secretary
                                                        (CS)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_56" type="checkbox" value="56"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_56" class="lbl1 lbl-break">Degree
                                                        In Medicine</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_4" type="checkbox" value="4"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_4" class="lbl1 lbl-break">DIPLOMA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_80" type="checkbox" value="80"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_80" class="lbl1 lbl-break">Diploma</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_123" type="checkbox" value="123"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_123" class="lbl1 lbl-break">Diploma
                                                        in AMIE</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_135" type="checkbox" value="135"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_135" class="lbl1 lbl-break">Diploma
                                                        in ITI</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_64" type="checkbox" value="64"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_64" class="lbl1 lbl-break">Diploma
                                                        In Nursing</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_47" type="checkbox" value="47"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_47" class="lbl1 lbl-break">DM -
                                                        Doctorate Of Medicine</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_114" type="checkbox" value="114"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_114" class="lbl1 lbl-break">Doctor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_94" type="checkbox" value="94"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_94"
                                                        class="lbl1 lbl-break">General-Help</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_82" type="checkbox" value="82"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_82" class="lbl1 lbl-break">High
                                                        School</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_5" type="checkbox" value="5"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_5" class="lbl1 lbl-break">HSC</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_77" type="checkbox" value="77"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_77" class="lbl1 lbl-break">IAS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_73" type="checkbox" value="73"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_73" class="lbl1 lbl-break">ICWA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_78" type="checkbox" value="78"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_78" class="lbl1 lbl-break">IPS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_79" type="checkbox" value="79"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_79" class="lbl1 lbl-break">IRS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_120" type="checkbox" value="120"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_120" class="lbl1 lbl-break">Legal
                                                        law</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_83" type="checkbox" value="83"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_83" class="lbl1 lbl-break">Less
                                                        Than High School</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_68" type="checkbox" value="68"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_68" class="lbl1 lbl-break">LLB</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_70" type="checkbox" value="70"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_70" class="lbl1 lbl-break">LLM</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_28" type="checkbox" value="28"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_28" class="lbl1 lbl-break">M
                                                        Arch</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_35" type="checkbox" value="35"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_35" class="lbl1 lbl-break">M
                                                        Com</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_34" type="checkbox" value="34"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_34" class="lbl1 lbl-break">M
                                                        Phil</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_36" type="checkbox" value="36"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_36" class="lbl1 lbl-break">M
                                                        Sc</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_31" type="checkbox" value="31"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_31" class="lbl1 lbl-break">M
                                                        Tech</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_61" type="checkbox" value="61"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_61" class="lbl1 lbl-break">M.Pharm</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_37" type="checkbox" value="37"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_37" class="lbl1 lbl-break">MA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_53" type="checkbox" value="53"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_53" class="lbl1 lbl-break">MAMS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_126" type="checkbox" value="126"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_126" class="lbl1 lbl-break">Management
                                                        Degree</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_57" type="checkbox" value="57"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_57" class="lbl1 lbl-break">Master
                                                        In Medicine</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_91" type="checkbox" value="91"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_91" class="lbl1 lbl-break">Master
                                                        of Arts (M.A.)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_69" type="checkbox" value="69"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_69" class="lbl1 lbl-break">Master
                                                        Of Law</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_55" type="checkbox" value="55"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_55" class="lbl1 lbl-break">Master
                                                        Of Veterinary
                                                        Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_121" type="checkbox" value="121"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_121" class="lbl1 lbl-break">Masters
                                                        in Arts</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_130" type="checkbox" value="130"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_130" class="lbl1 lbl-break">Masters
                                                        in Commerce</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_127" type="checkbox" value="127"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_127" class="lbl1 lbl-break">Masters
                                                        in Computers</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_124" type="checkbox" value="124"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_124" class="lbl1 lbl-break">Masters
                                                        in Education</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_136" type="checkbox" value="136"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_136" class="lbl1 lbl-break">Masters
                                                        in
                                                        Engineering</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_116" type="checkbox" value="116"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_116" class="lbl1 lbl-break">Masters
                                                        in Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_125" type="checkbox" value="125"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_125" class="lbl1 lbl-break">Masters
                                                        in Technology</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_41" type="checkbox" value="41"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_41" class="lbl1 lbl-break">MBA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_44" type="checkbox" value="44"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_44" class="lbl1 lbl-break">MBBS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_29" type="checkbox" value="29"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_29" class="lbl1 lbl-break">MCA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_46" type="checkbox" value="46"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_46" class="lbl1 lbl-break">MCh
                                                        - Master Of Chirurgiae</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_45" type="checkbox" value="45"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_45" class="lbl1 lbl-break">MD /
                                                        MS (Medical)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_49" type="checkbox" value="49"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_49" class="lbl1 lbl-break">MDS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_27" type="checkbox" value="27"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_27" class="lbl1 lbl-break">ME</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_88" type="checkbox" value="88"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_88" class="lbl1 lbl-break">Mechanical
                                                        engineering
                                                        technology</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_23" type="checkbox" value="23"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_23" class="lbl1 lbl-break">MEd</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_65" type="checkbox" value="65"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_65" class="lbl1 lbl-break">Medical
                                                        Laboratory
                                                        Technology</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_122" type="checkbox" value="122"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_122"
                                                        class="lbl1 lbl-break">Medicine</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_43" type="checkbox" value="43"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_43" class="lbl1 lbl-break">MFM
                                                        (Financial Management)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_40" type="checkbox" value="40"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_40" class="lbl1 lbl-break">MHM</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_51" type="checkbox" value="51"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_51" class="lbl1 lbl-break">MHMS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_38" type="checkbox" value="38"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_38" class="lbl1 lbl-break">MLIS</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_59" type="checkbox" value="59"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_59" class="lbl1 lbl-break">MPT</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_32" type="checkbox" value="32"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_32" class="lbl1 lbl-break">MSc
                                                        Computer Science</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_33" type="checkbox" value="33"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_33" class="lbl1 lbl-break">MSc
                                                        IT</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_63" type="checkbox" value="63"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_63" class="lbl1 lbl-break">MSc
                                                        Nursing</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_39" type="checkbox" value="39"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_39" class="lbl1 lbl-break">MSW</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_117" type="checkbox" value="117"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_117" class="lbl1 lbl-break">Nil</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_110" type="checkbox" value="110"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_110" class="lbl1 lbl-break">Nursery</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_84" type="checkbox" value="84"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_84" class="lbl1 lbl-break">Other
                                                        Education</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_119" type="checkbox" value="119"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_119" class="lbl1 lbl-break">Others</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_2" type="checkbox" value="2"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_2" class="lbl1 lbl-break">PG</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_30" type="checkbox" value="30"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_30" class="lbl1 lbl-break">PGDCA</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_42" type="checkbox" value="42"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_42" class="lbl1 lbl-break">PGDM</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_76" type="checkbox" value="76"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_76" class="lbl1 lbl-break">Ph
                                                        D</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_1" type="checkbox" value="1"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_1" class="lbl1 lbl-break">PHD</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_81" type="checkbox" value="81"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_81"
                                                        class="lbl1 lbl-break">Polytechnic</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_109" type="checkbox" value="109"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_109"
                                                        class="lbl1 lbl-break">Pre-Primary</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_108" type="checkbox" value="108"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_108" class="lbl1 lbl-break">Primary</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_92" type="checkbox" value="92"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_92" class="lbl1 lbl-break">Registered
                                                        Nurse</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_93" type="checkbox" value="93"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_93" class="lbl1 lbl-break">Registered
                                                        Practical
                                                        Nurse</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_7" type="checkbox" value="7"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_7" class="lbl1 lbl-break">Secondary</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_6" type="checkbox" value="6"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_6" class="lbl1 lbl-break">SSC</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_96" type="checkbox" value="96"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_96" class="lbl1 lbl-break">Truck
                                                        Driver</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_3" type="checkbox" value="3"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_3" class="lbl1 lbl-break">UG</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="education_id_97" type="checkbox" value="97"
                                                        name="education[]" onclick="refine_search()" class="education">
                                                    <label for="education_id_97" class="lbl1 lbl-break">Welder</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-toggle="modal" href="#more-education">
                                                    <span class="checkbox-m more OpenSans-Bold">
                                                        + 120 more
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseten" aria-expanded="false"
                                            aria-controls="collapseten">
                                            Occupation
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('occupation');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('occupation');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseten" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapseten">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_130" type="checkbox" value="130"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_130"
                                                        class="lbl1 lbl-break">Accountant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_99" type="checkbox" value="99"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_99"
                                                        class="lbl1 lbl-break">Accounts</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_136" type="checkbox" value="136"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_136" class="lbl1 lbl-break">Acting
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_140" type="checkbox" value="140"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_140" class="lbl1 lbl-break">Actor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_132" type="checkbox" value="132"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_132" class="lbl1 lbl-break">Administration
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_134" type="checkbox" value="134"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_134" class="lbl1 lbl-break">Advertising
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_122" type="checkbox" value="122"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_122" class="lbl1 lbl-break">Air
                                                        hostes</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_118" type="checkbox" value="118"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_118" class="lbl1 lbl-break">Air
                                                        Traffic
                                                        Controller</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_126" type="checkbox" value="126"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_126"
                                                        class="lbl1 lbl-break">Architect</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_129" type="checkbox" value="129"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_129"
                                                        class="lbl1 lbl-break">Artisan</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_143" type="checkbox" value="143"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_143" class="lbl1 lbl-break">Banker</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_98" type="checkbox" value="98"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_98" class="lbl1 lbl-break">Banking</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_131" type="checkbox" value="131"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_131"
                                                        class="lbl1 lbl-break">Beautician</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_142" type="checkbox" value="142"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_142" class="lbl1 lbl-break">Biologist /
                                                        Botanist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_138" type="checkbox" value="138"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_138" class="lbl1 lbl-break">Business
                                                        Person</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_137" type="checkbox" value="137"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_137" class="lbl1 lbl-break">Chartered
                                                        Accountant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_18" type="checkbox" value="18"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_18" class="lbl1 lbl-break">Civil
                                                        Engineer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_19" type="checkbox" value="19"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_19" class="lbl1 lbl-break">Clerical
                                                        Official</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_100" type="checkbox" value="100"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_100" class="lbl1 lbl-break">CNC
                                                        OP</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_20" type="checkbox" value="20"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_20" class="lbl1 lbl-break">Commercial
                                                        Pilot</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_21" type="checkbox" value="21"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_21" class="lbl1 lbl-break">Company
                                                        Secretary</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_22" type="checkbox" value="22"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_22" class="lbl1 lbl-break">Computer
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_104" type="checkbox" value="104"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_104" class="lbl1 lbl-break">Computer
                                                        tech</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_23" type="checkbox" value="23"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_23"
                                                        class="lbl1 lbl-break">Consultant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_24" type="checkbox" value="24"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_24"
                                                        class="lbl1 lbl-break">Contractor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_25" type="checkbox" value="25"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_25" class="lbl1 lbl-break">Cost
                                                        Accountant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_26" type="checkbox" value="26"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_26" class="lbl1 lbl-break">Creative
                                                        Person</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_27" type="checkbox" value="27"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_27" class="lbl1 lbl-break">Customer
                                                        Support
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_141" type="checkbox" value="141"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_141" class="lbl1 lbl-break">Defence
                                                        Employee</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_28" type="checkbox" value="28"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_28" class="lbl1 lbl-break">Defense
                                                        Employee</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_29" type="checkbox" value="29"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_29" class="lbl1 lbl-break">Dentist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_30" type="checkbox" value="30"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_30"
                                                        class="lbl1 lbl-break">Designer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_31" type="checkbox" value="31"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_31" class="lbl1 lbl-break">Doctor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_32" type="checkbox" value="32"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_32"
                                                        class="lbl1 lbl-break">Economist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_33" type="checkbox" value="33"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_33"
                                                        class="lbl1 lbl-break">Engineer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_34" type="checkbox" value="34"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_34" class="lbl1 lbl-break">Engineer
                                                        (Mechanical)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_35" type="checkbox" value="35"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_35" class="lbl1 lbl-break">Engineer
                                                        (Project)</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_36" type="checkbox" value="36"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_36" class="lbl1 lbl-break">Entertainment
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_37" type="checkbox" value="37"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_37" class="lbl1 lbl-break">Event
                                                        Manager</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_38" type="checkbox" value="38"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_38"
                                                        class="lbl1 lbl-break">Executive</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_39" type="checkbox" value="39"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_39" class="lbl1 lbl-break">Factory
                                                        worker</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_40" type="checkbox" value="40"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_40" class="lbl1 lbl-break">Farmer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_41" type="checkbox" value="41"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_41" class="lbl1 lbl-break">Fashion
                                                        Designer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_42" type="checkbox" value="42"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_42" class="lbl1 lbl-break">Finance
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_43" type="checkbox" value="43"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_43" class="lbl1 lbl-break">Flight
                                                        Attendant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_113" type="checkbox" value="113"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_113"
                                                        class="lbl1 lbl-break">Founder</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_114" type="checkbox" value="114"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_114" class="lbl1 lbl-break">Founder or Co
                                                        Founder</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_102" type="checkbox" value="102"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_102" class="lbl1 lbl-break">Genral
                                                        Helper</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_44" type="checkbox" value="44"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_44" class="lbl1 lbl-break">Government
                                                        Employee</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_45" type="checkbox" value="45"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_45" class="lbl1 lbl-break">Health
                                                        Care
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_46" type="checkbox" value="46"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_46" class="lbl1 lbl-break">Home
                                                        Maker</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_3" type="checkbox" value="3"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_3"
                                                        class="lbl1 lbl-break">homemaker</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_47" type="checkbox" value="47"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_47" class="lbl1 lbl-break">Hotel
                                                        &amp; Restaurant
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_48" type="checkbox" value="48"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_48" class="lbl1 lbl-break">Human
                                                        Resources
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_127" type="checkbox" value="127"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_127" class="lbl1 lbl-break">Insurance
                                                        Advisor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_133" type="checkbox" value="133"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_133" class="lbl1 lbl-break">Insurance
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_49" type="checkbox" value="49"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_49" class="lbl1 lbl-break">Interior
                                                        Designer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_50" type="checkbox" value="50"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_50" class="lbl1 lbl-break">Investment
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_51" type="checkbox" value="51"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_51" class="lbl1 lbl-break">IT
                                                        / Telecom Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_52" type="checkbox" value="52"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_52"
                                                        class="lbl1 lbl-break">Journalist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_53" type="checkbox" value="53"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_53" class="lbl1 lbl-break">Lawyer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_54" type="checkbox" value="54"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_54"
                                                        class="lbl1 lbl-break">Lecturer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_55" type="checkbox" value="55"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_55" class="lbl1 lbl-break">Legal
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_56" type="checkbox" value="56"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_56" class="lbl1 lbl-break">Manager</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_57" type="checkbox" value="57"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_57" class="lbl1 lbl-break">Marketing
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_58" type="checkbox" value="58"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_58" class="lbl1 lbl-break">Media
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_59" type="checkbox" value="59"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_59" class="lbl1 lbl-break">Medical
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_60" type="checkbox" value="60"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_60" class="lbl1 lbl-break">Medical
                                                        Transcriptionist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_61" type="checkbox" value="61"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_61" class="lbl1 lbl-break">Merchant Naval
                                                        Officer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_120" type="checkbox" value="120"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_120" class="lbl1 lbl-break">MVI</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_124" type="checkbox" value="124"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_124" class="lbl1 lbl-break">NGO or
                                                        NPO Employee</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_125" type="checkbox" value="125"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_125" class="lbl1 lbl-break">NGO or
                                                        NPO Memebr</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_128" type="checkbox" value="128"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_128" class="lbl1 lbl-break">Nil</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_144" type="checkbox" value="144"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_144" class="lbl1 lbl-break">Non-mainstream
                                                        professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_135" type="checkbox" value="135"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_135" class="lbl1 lbl-break">Not
                                                        working</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_62" type="checkbox" value="62"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_62" class="lbl1 lbl-break">Nurse</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_63" type="checkbox" value="63"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_63" class="lbl1 lbl-break">Occupational
                                                        Therapist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_64" type="checkbox" value="64"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_64"
                                                        class="lbl1 lbl-break">Optician</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_94" type="checkbox" value="94"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_94" class="lbl1 lbl-break">Others</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_103" type="checkbox" value="103"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_103" class="lbl1 lbl-break">Own
                                                        Business</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_65" type="checkbox" value="65"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_65"
                                                        class="lbl1 lbl-break">Pharmacist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_139" type="checkbox" value="139"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_139"
                                                        class="lbl1 lbl-break">Photographer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_66" type="checkbox" value="66"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_66" class="lbl1 lbl-break">Physician
                                                        Assistant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_67" type="checkbox" value="67"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_67"
                                                        class="lbl1 lbl-break">Physicist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_68" type="checkbox" value="68"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_68"
                                                        class="lbl1 lbl-break">Physiotherapist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_69" type="checkbox" value="69"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_69" class="lbl1 lbl-break">Pilot</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_70" type="checkbox" value="70"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_70"
                                                        class="lbl1 lbl-break">Politician</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_121" type="checkbox" value="121"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_121" class="lbl1 lbl-break">Private
                                                        Pilot</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_71" type="checkbox" value="71"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_71" class="lbl1 lbl-break">Production
                                                        professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_72" type="checkbox" value="72"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_72"
                                                        class="lbl1 lbl-break">Professor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_73" type="checkbox" value="73"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_73"
                                                        class="lbl1 lbl-break">Psychologist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_74" type="checkbox" value="74"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_74" class="lbl1 lbl-break">Public
                                                        Relations
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_75" type="checkbox" value="75"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_75" class="lbl1 lbl-break">Real
                                                        Estate
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_76" type="checkbox" value="76"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_76" class="lbl1 lbl-break">Research
                                                        Scholar</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_78" type="checkbox" value="78"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_78" class="lbl1 lbl-break">Retail
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_77" type="checkbox" value="77"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_77" class="lbl1 lbl-break">Retired
                                                        Person</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_97" type="checkbox" value="97"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_97" class="lbl1 lbl-break">Risk
                                                        analyst</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_119" type="checkbox" value="119"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_119" class="lbl1 lbl-break">RTO</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_1" type="checkbox" value="1"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_1" class="lbl1 lbl-break">salaried</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_79" type="checkbox" value="79"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_79" class="lbl1 lbl-break">Sales
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_80" type="checkbox" value="80"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_80"
                                                        class="lbl1 lbl-break">Scientist</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_81" type="checkbox" value="81"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_81" class="lbl1 lbl-break">Self-employed
                                                        Person</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_2" type="checkbox" value="2"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_2"
                                                        class="lbl1 lbl-break">selfemployeed</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_82" type="checkbox" value="82"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_82" class="lbl1 lbl-break">Social
                                                        Worker</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_83" type="checkbox" value="83"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_83" class="lbl1 lbl-break">Software
                                                        Consultant</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_84" type="checkbox" value="84"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_84"
                                                        class="lbl1 lbl-break">Sportsman</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_115" type="checkbox" value="115"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_115" class="lbl1 lbl-break">Start
                                                        Up Company
                                                        Employee</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_117" type="checkbox" value="117"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_117" class="lbl1 lbl-break">Start
                                                        Up Investor in
                                                        companies</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_116" type="checkbox" value="116"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_116" class="lbl1 lbl-break">Start
                                                        Up Investor in One
                                                        Company</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_123" type="checkbox" value="123"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_123" class="lbl1 lbl-break">Strtegic
                                                        Planner</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_4" type="checkbox" value="4"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_4" class="lbl1 lbl-break">student</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_85" type="checkbox" value="85"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_85" class="lbl1 lbl-break">Student</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_86" type="checkbox" value="86"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_86" class="lbl1 lbl-break">Teacher</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_87" type="checkbox" value="87"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_87"
                                                        class="lbl1 lbl-break">Technician</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_88" type="checkbox" value="88"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_88" class="lbl1 lbl-break">Training
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_89" type="checkbox" value="89"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_89" class="lbl1 lbl-break">Transportation
                                                        Professional</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_101" type="checkbox" value="101"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_101" class="lbl1 lbl-break">Truck
                                                        Driver</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_5" type="checkbox" value="5"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_5"
                                                        class="lbl1 lbl-break">unemployeed</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_90" type="checkbox" value="90"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_90" class="lbl1 lbl-break">Veterinary
                                                        Doctor</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_91" type="checkbox" value="91"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_91"
                                                        class="lbl1 lbl-break">Volunteer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_109" type="checkbox" value="109"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_109" class="lbl1 lbl-break">Writer</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="occupation_id_108" type="checkbox" value="108"
                                                        name="occupation[]" onclick="refine_search()"
                                                        class="occupation">
                                                    <label for="occupation_id_108"
                                                        class="lbl1 lbl-break">Zoologist</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-toggle="modal" href="#more-occupation">
                                                    <span class="checkbox-m more OpenSans-Bold">
                                                        + 122 more
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapsetwelve" aria-expanded="false"
                                            aria-controls="collapsetwelve">
                                            Annual Income
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('income');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('income');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapsetwelve" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapsetwelve">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs10000-50000" type="checkbox"
                                                        value="Rs 10,000 - 50,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs10000-50000" class="lbl1 lbl-break">Rs
                                                        10,000 - 50,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs50000-100000" type="checkbox"
                                                        value="Rs 50,000 - 1,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs50000-100000" class="lbl1 lbl-break">Rs
                                                        50,000 - 1,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs100000-200000" type="checkbox"
                                                        value="Rs 1,00,000 - 2,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs100000-200000" class="lbl1 lbl-break">Rs
                                                        1,00,000 -
                                                        2,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs200000-500000" type="checkbox"
                                                        value="Rs 2,00,000 - 5,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs200000-500000" class="lbl1 lbl-break">Rs
                                                        2,00,000 -
                                                        5,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs500000-1000000" type="checkbox"
                                                        value="Rs 5,00,000 - 10,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs500000-1000000" class="lbl1 lbl-break">Rs
                                                        5,00,000 -
                                                        10,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:block;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs1000000-5000000" type="checkbox"
                                                        value="Rs 10,00,000 - 50,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs1000000-5000000" class="lbl1 lbl-break">Rs
                                                        10,00,000 -
                                                        50,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Rs5000000-10000000" type="checkbox"
                                                        value="Rs 50,00,000 - 1,00,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Rs5000000-10000000" class="lbl1 lbl-break">Rs
                                                        50,00,000 -
                                                        1,00,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_AboveRs10000000" type="checkbox"
                                                        value="Above Rs 1,00,00,000" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_AboveRs10000000" class="lbl1 lbl-break">Above
                                                        Rs 1,00,00,000</label>
                                                </p>
                                            </div>
                                            <div class="box" style="display:none;">
                                                <p class="checkbox-m">
                                                    <input id="income_id_Doesnotmatter" type="checkbox"
                                                        value="Does not matter" name="income[]"
                                                        onclick="refine_search()" class="income">
                                                    <label for="income_id_Doesnotmatter" class="lbl1 lbl-break">Does not
                                                        matter</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-toggle="modal" href="#more-income">
                                                    <span class="checkbox-m more OpenSans-Bold">
                                                        + 9 more
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapsetwelve-a" aria-expanded="false"
                                            aria-controls="collapsetwelve-a">
                                            Employee In
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('employee_in');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('employee_in');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapsetwelve-a" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapsetwelve-a">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Private" type="checkbox" value="Private"
                                                        name="employee_in[]" onclick="refine_search()"
                                                        class="employee_in">
                                                    <label for="employee_in_id_Private"
                                                        class="lbl1 lbl-break">Private</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Government" type="checkbox"
                                                        value="Government" name="employee_in[]"
                                                        onclick="refine_search()" class="employee_in">
                                                    <label for="employee_in_id_Government"
                                                        class="lbl1 lbl-break">Government</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Business" type="checkbox" value="Business"
                                                        name="employee_in[]" onclick="refine_search()"
                                                        class="employee_in">
                                                    <label for="employee_in_id_Business"
                                                        class="lbl1 lbl-break">Business</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Defence" type="checkbox" value="Defence"
                                                        name="employee_in[]" onclick="refine_search()"
                                                        class="employee_in">
                                                    <label for="employee_in_id_Defence"
                                                        class="lbl1 lbl-break">Defence</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_NotEmployedin" type="checkbox"
                                                        value="Not Employed in" name="employee_in[]"
                                                        onclick="refine_search()" class="employee_in">
                                                    <label for="employee_in_id_NotEmployedin" class="lbl1 lbl-break">Not
                                                        Employed in</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_PublicSector" type="checkbox"
                                                        value="Public Sector" name="employee_in[]"
                                                        onclick="refine_search()" class="employee_in">
                                                    <label for="employee_in_id_PublicSector"
                                                        class="lbl1 lbl-break">Public Sector</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="employee_in_id_Others" type="checkbox" value="Others"
                                                        name="employee_in[]" onclick="refine_search()"
                                                        class="employee_in">
                                                    <label for="employee_in_id_Others"
                                                        class="lbl1 lbl-break">Others</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <a data-toggle="modal" href="#more-employee_in">
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

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist" id="headingprof">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseprof" aria-expanded="false"
                                            aria-controls="collapseprof">
                                            Profile Picture
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('profile_picture');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('profile_picture');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapseprof" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingprof">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="photo_search" type="checkbox" value="photo_search"
                                                        name="photo_search" onclick="refine_search();"
                                                        class="profile_picture">
                                                    <label for="photo_search" class="lbl1 lbl-break">With
                                                        Picture</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top-minus">
                            <div class="panel panel-default panel1-cstm pannel-new">
                                <div class="panel-heading panel-cstm" role="tablist">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapsetwelve-b" aria-expanded="false"
                                            aria-controls="collapsetwelve-b">
                                            Complexion
                                        </a>
                                    </h4>
                                </div>
                                <a href="javascript:void(0)" onclick="select_all_checkbox('complexion');">
                                    <span class="s-all float-end">
                                        Select All |
                                    </span>
                                </a>
                                <a href="javascript:void(0)" onclick="clear_refine('complexion');">
                                    <span class="clear-all float-end">
                                        Clear All
                                    </span>
                                </a>
                                <div id="collapsetwelve-b" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapsetwelve-b">
                                    <div class="panel-body no-padding bg-color">
                                        <div class="content">
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="complexion_0" type="checkbox" value="Wheatish"
                                                        name="complexion[]" onclick="refine_search()"
                                                        class="complexion">
                                                    <label for="complexion_0" class="lbl1 lbl-break">Wheatish</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="complexion_1" type="checkbox" value="Very Fair"
                                                        name="complexion[]" onclick="refine_search()"
                                                        class="complexion">
                                                    <label for="complexion_1" class="lbl1 lbl-break">Very
                                                        Fair</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="complexion_2" type="checkbox" value="Fair"
                                                        name="complexion[]" onclick="refine_search()"
                                                        class="complexion">
                                                    <label for="complexion_2" class="lbl1 lbl-break">Fair</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="complexion_3" type="checkbox" value="Wheatish Brown"
                                                        name="complexion[]" onclick="refine_search()"
                                                        class="complexion">
                                                    <label for="complexion_3" class="lbl1 lbl-break">Wheatish
                                                        Brown</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="complexion_4" type="checkbox" value="Dark"
                                                        name="complexion[]" onclick="refine_search()"
                                                        class="complexion">
                                                    <label for="complexion_4" class="lbl1 lbl-break">Dark</label>
                                                </p>
                                            </div>
                                            <div class="box">
                                                <p class="checkbox-m">
                                                    <input id="complexion_5" type="checkbox" value="Wheatish Medium"
                                                        name="complexion[]" onclick="refine_search()"
                                                        class="complexion">
                                                    <label for="complexion_5" class="lbl1 lbl-break">Wheatish
                                                        Medium</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>