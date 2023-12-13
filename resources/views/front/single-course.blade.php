<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyBhai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />

    <style>
        form {
            display: flex;
            justify-content: center;
        }

        input {
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <!-- ------------------------------------------------- navbar ------------------------------------------------- -->

    <x-user.navbar></x-user.navbar>

    <!-- ------------------------------------------------- navbar ------------------------------------------------- -->

    <!-- ------------------------------------------------- main section -------------------------------------------------  -->

    <br /><br /><br />

    <section class="course-seection">
        <div class="course-seection-div">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-7">
                    <div>
                        <p class="second_left_section_heading">{{ $course->title }}</p>
                    </div>

                    <div>
                        <p style="font-weight: bold">
                            What you will learn from the course:
                        </p>

                        {!! $course->description !!}
                    </div>
                </div>

                <div class="col-md-5">
                    <br /><br />

                    <div class="course-fee-design">
                        <div>
                            <p class="text-center third-section-learning-box_p1">
                                Course Fee
                            </p>
                            <p class="text-center third-section-learning-box_p1">{{ $course->price }}/-</p>
                        </div>
                        <div>
                            <br />
                            <div>
                                <div>
                                    <p class="center-class">Admission Ends: {{ $course->admission_ends }}</p>
                                    <p></p>
                                </div>

                                <div>
                                    <p class="center-class">Class Starts: {{ $course->class_starts }}</p>
                                </div>
                            </div>
                        </div>

                        <br />
                        <div>
                            <button class="d-block m-auto enroll-btn-design">
                                Enroll Now
                            </button>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- main section -------------------------------------------------  -->

    <!-- ------------------------------------------------- foundation section -------------------------------------------------  -->

    <section class="third-section">
        <div class="third-section-title">
            <p></p>
        </div>

        <div>
            <div class="third-section-margin">
                <div class="row" style="margin: 0; padding: 0">
                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">Foundation</h5>
                                {!! $course->foundation !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">Intermediate</h5>
                                {!! $course->intermediate !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">Advanced</h5>

                                {!! $course->advanced !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- foundation section -------------------------------------------------  -->

    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <x-user.footer></x-user.footer>

    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
