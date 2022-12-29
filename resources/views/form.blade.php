<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .h-100 {
            height: 100% !important;
        }

        .bg-cover {
            background: no-repeat 50%/cover;
        }

        .sidebar {
            background-image: url(pexels-jopwell-2422280.jpg);
            position: fixed;
            top: 0;
            bottom: 0;
        }

        .frm-spcng {
            padding-top: 50px;
            padding-bottom: 200px;
        }

        .pb-4 {
            padding-bottom: 1.5rem !important;
        }

        #crmWebToEntityForm {
            text-align: left;
        }


        @media (min-width: 768px) {
            .px-md-5 {
                padding-right: 3rem;
                padding-left: 3rem !important;
            }
        }

        @media (max-width: 768px) {
            .ms-sm-auto {
                padding: 0 20px;
                margin-left: auto !important;
            }
        }

        .dropdown-toggle {
            height: 40px;
            width: 400px !important;
        }

        /*--snackbar--*/
        #snackbar {
            display: none;
            min-width: 250px;
            margin-left: -125px;
            background-color: #363030;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            margin-right: 10px;
            padding: 13px;
            position: fixed;
            z-index: 20000000000;
            right: 0;
            bottom: 30px;
            font-size: 15px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        /*--snackbar--*/
    </style>
</head>

<body>
    <div class="therapy-network">
        <nav class="col-md-5 col-lg-5 d-md-block  sidebar collapse h-100 bg-cover" id="sidebarMenu"></nav>

        <main class="col-md-7 ms-sm-auto col-lg-7 px-md-5 frm-spcng">
            <img alt="logo" class="pb-4" src="tn-hn1-blue.svg" width="300">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="pb-3" style="letter-spacing: -0.06rem;">Join Our Network</h1>
                    <p class="pb-3">Please complete the form and a member of our Network Development team will follow
                        up to answer your questions. If you'd like to proceed, we'll initiate the creation of a
                        Participation Agreement as well as start the Credentialing process.</p>
                </div>
            </div>


            <div id="crmWebToEntityForm">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="content-type" content="text/html;charset=UTF-8">
                <form action={{ route('send.data.tocrm') }} name="WebToLeads2250905000027780001" method="POST"
                    {{-- onsubmit="javascript:document.charset=&quot;UTF-8&quot;; return checkMandatory2250905000027780001()" --}} accept-charset="UTF-8">
                    @csrf
                    <div class="row mb-3 g-3">
                        <div class="col-sm-12">
                            <label class="form-label" for="practice_name">Practice Name</label>
                            <input class="form-control" type="text" id="practice_name" name="practice_name"
                                maxlength="100">
                            @if ($errors->has('practice_name'))
                                <span class="text-danger">{{ $errors->first('practice_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-md-6 col-sm-12">
                            <label class="form-label" for="tax_id_number">Tax ID Number</label>
                            <input class="form-control" type="tel" id="tax_id_number" name="tax_id_number"
                                maxlength="100">
                            @if ($errors->has('tax_id_number'))
                                <span class="text-danger">{{ $errors->first('tax_id_number') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label class="form-label" for="npi_number">NPI Number</label>
                            <input class="form-control" id="npi_number" name="npi_number" maxlength="100"
                                type="tel">
                            @if ($errors->has('npi_number'))
                                <span class="text-danger">{{ $errors->first('npi_number') }}</span>
                            @endif
                        </div>

                    </div>


                    <div class="row mb-3 g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="first_name">First Name</label>
                            <input class="form-control" id="first_name" maxlength="40" name="first_name" type="text">
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input class="form-control" id="last_name" maxlength="40" name="last_name" type="text">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="'job_title">Job Title</label>
                            <input class="form-control" id="job_title" maxlength="50" name="job_title" type="text">
                            @if ($errors->has('job_title'))
                                <span class="text-danger">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="phone">Office Phone</label>
                            <input class="form-control" id="phone" maxlength="100" name="phone" type="tel">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input class="form-control" id="mobile" maxlength="100" name="mobile"
                                type="tel">
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="fax">Fax</label>
                            <input class="form-control" id="fax" maxlength="100" name="fax"
                                type="tel">
                            @if ($errors->has('fax'))
                                <span class="text-danger">{{ $errors->first('fax') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" ftype="email" id="email" maxlength="100"
                                name="email" type="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="street_address">Street Address</label>
                            <input class="form-control" id="street_address" maxlength="100" name="street_address"
                                type="text">
                            @if ($errors->has('street_address'))
                                <span class="text-danger">{{ $errors->first('street_address') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="city">City</label>
                            <input class="form-control" id="city" maxlength="100" name="city"
                                type="text">
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="state">State</label>
                            <input class="form-control" id="state" maxlength="100" name="state"
                                type="text">
                            @if ($errors->has('state'))
                                <span class="text-danger">{{ $errors->first('state') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="zip_code">Zip Code</label>
                            <input class="form-control" id="zip_code" maxlength="100" name="zip_code"
                                type="tel">
                            @if ($errors->has('zip_code'))
                                <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="county">County / Counties</label>
                            <input class="form-control" id="county" maxlength="200" name="county"
                                type="text">
                            @if ($errors->has('county'))
                                <span class="text-danger">{{ $errors->first('county') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="number_of_locations">Number of Locations</label>
                            <input class="form-control" id="number_of_locations" maxlength="100"
                                name="number_of_locations" type="tel">
                            @if ($errors->has('number_of_locations'))
                                <span class="text-danger">{{ $errors->first('number_of_locations') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-1 mt-2">Specialty <span class="text-muted">(select all that apply)</span></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="ot" value="ot"
                                    maxlength="3" name="specialty[]" type="checkbox">
                                <label class="form-check-label" for="ot">OT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="pt" value="pt"
                                    maxlength="3" name="specialty[]" type="checkbox">
                                <label class="form-check-label" for="pt">PT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="st" value="st"
                                    maxlength="3" name="specialty[]" type="checkbox">
                                <label class="form-check-label" for="st">ST</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="chiro" value="chiro"
                                    maxlength="3" name="specialty[]" type="checkbox">
                                <label class="form-check-label" for="chiro">Chiro</label>
                            </div>
                            <br>
                            @if ($errors->has('specialty'))
                                <span class="text-danger">{{ $errors->first('specialty') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="mb-1 mt-4">Line of Business <span class="text-muted">(select all that
                                    apply)</span></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="medicaid" value="medicaid"
                                    maxlength="3" name="line_of_business[]" type="checkbox">
                                <label class="form-check-label" for="medicaid">Medicaid</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="medicare" value="medicare"
                                    maxlength="3" name="line_of_business[]" type="checkbox">
                                <label class="form-check-label" for="medicare">Medicare</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="commercial" value="commercial"
                                    maxlength="3" name="line_of_business[]" type="checkbox">
                                <label class="form-check-label" for="commercial">Commercial</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="marketplace" value="marketplace"
                                    maxlength="3" name="line_of_business[]" type="checkbox">
                                <label class="form-check-label" for="marketplace">Marketplace</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input zcwf_ckbox" id="workers_comp" value="workers_comp"
                                    maxlength="3" name="line_of_business[]" type="checkbox">
                                <label class="form-check-label" for="workers_comp">Worker's Comp</label>
                            </div>
                        </div>
                        @if ($errors->has('line_of_business'))
                            <span class="text-danger">{{ $errors->first('line_of_business') }}</span>
                        @endif
                    </div>
                    <div class="row gx-4 pb-2 mt-4">
                        <div class="col-sm-12">
                            <label class="form-label" for="group_seen">Age Group Seen</label><br>
                            <select class="selectpicker" multiple title="Choose one of the following..." multiple
                                data-live-search="true" name="group_seen[]">
                                <option value="Pediatric">Pediatric</option>
                                <option value="Adult">Adult</option>
                            </select>

                        </div>
                        @if ($errors->has('group_seen'))
                            <span class="text-danger">{{ $errors->first('group_seen') }}</span>
                        @endif
                    </div>
                    <div class="row gx-4 pb-2 mt-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="lead_source">How did you hear about us?</label>
                            <select aria-label="How did you hear about us?" class="form-select" id="lead_source"
                                name="lead_source">
                                <option value="">Choose...</option>
                                <option value="TN Website">Our Website</option>
                                <option value="Marketing Campaign">Email</option>
                                <option value="Fax Blast Outreach">Fax</option>
                                <option value="Web Research">Web</option>
                                <option value="Other">Other</option>
                            </select>
                            @if ($errors->has('lead_source'))
                                <span class="text-danger">{{ $errors->first('lead_source') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="website">Website </label>
                            <input class="form-control" id="website" name="website" type="text"
                                aria-required="true" pattern="https://.*" size="30">
                            @if ($errors->has('website'))
                                <span class="text-danger">{{ $errors->first('website') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row gx-4 pb-2 mt-5">
                        <div class="col-sm-4">
                            <input class="formsubmit zcwf_button w-100 btn btn-primary btn-lg" id="formsubmit"
                                title="Submit" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
                @if (\Session::has('success'))
                    <div id="snackbar">
                        @php
                            $success = Session::get('success');
                            echo $success;
                        @endphp
                    </div>
                @endif

                @if (\Session::has('failed'))
                    <div id="snackbar">
                        @php
                            $failed = Session::get('failed');
                            echo $failed;
                        @endphp
                    </div>
                @endif
            </div>
        </main>

    </div>

</body>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.selectpicker').selectpicker();
    });

    $("#snackbar").show();
    setTimeout(function() {
        $("#snackbar").hide();
    }, 5000);
</script>

</html>
