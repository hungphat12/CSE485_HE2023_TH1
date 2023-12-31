<!--Sự kiện POST ko thực thi trong ngữ cảnh do đâu?-->
<!--Trong khi tôi vừa Demo kịch bản tương tự ,mà nó vẫn chạy-->

<!--Câu chuyện 1: Phải chăng do modal của Bootstrap > Cần xủ lý sự kiện này bằng Javascript-->
<!--Câu chuyện 2: Phải chăng do tôi đang include Controller ... > Sai vị trí đường dẫn ko?-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flexbook</title>
<!--    CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">-->
    <!--    CSS MyStyle -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="bg-gray">
<!-- Login -->
<div class="container mt-5 pt-5 d-flex flex-column flex-lg-row justify-content-evenly">
    <!-- heading -->
    <div class="text-center text-lg-start mt-0 pt-0 mt-lg-5 pt-lg-5">
        <h1 class="text-primary fw-bold fs-0">flexbook</h1>
        <p class="w-75 mx-auto fs-4 mx-lg-0">Flexbook helps you connect and share with the people in your life.</p>
    </div>
    <!-- form card -->
    <div style="max-width: 28rem; width: 100%">
        <!-- login form -->
        <!-- first was form tag -->
        <div class="bg-white shadow rounded p-3 input-group-lg">
            <input type="email" class="form-control my-3" placeholder="Email address or phone number" />
            <input type="password" class="form-control my-3" placeholder="Password" />
            <a href="./feed.html"><button class="btn btn-primary w-100 my-3">Log In</button></a>
            <a href="#" class="text-decoration-none text-center"><p>Forgotten password?</p></a>
            <!-- create form -->
            <hr />
            <div class="text-center my-4">
                <button class="btn btn-success btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#createModal">Create New Account</button>
            </div>
            <!-- create modal -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- head -->
                        <div class="modal-header">
                            <div>
                                <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
                                <span class="text-muted fs-7">It's quick and easy.</span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- body -->
                        <div class="modal-body">
                            <form action="process.php" method="post">
                                <!-- names -->
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Username" name="txtUsername"/>
                                    </div>
<!--                                    <div class="col">-->
<!--                                        <input type="text" class="form-control" placeholder="Surname" />-->
<!--                                    </div>-->
                                </div>
                                <!-- email & pass -->
                                <input type="email" class="form-control my-3" placeholder="Email address" name="txtEmail"/>
                                <input type="password" class="form-control my-3" placeholder="New password" name="txtPassword"/>
                                <!-- DOB -->
<!--                                <div class="row my-3">-->
<!--                                    <span class="text-muted fs-7">Date of birth <i class="fas fa-question-circle" data-bs-toggle="popover" type="button" data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>-->
<!--                                    <div class="col">-->
<!--                                        <select class="form-select">-->
<!--                                            <option value="1">One</option>-->
<!--                                            <option value="2">Two</option>-->
<!--                                            <option value="3">Three</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <select class="form-select">-->
<!--                                            <option value="1">One</option>-->
<!--                                            <option value="2">Two</option>-->
<!--                                            <option value="3">Three</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <select class="form-select">-->
<!--                                            <option value="1">One</option>-->
<!--                                            <option value="2">Two</option>-->
<!--                                            <option value="3">Three</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--
<!--                                <div class="row my-3">-->
<!--                                    <span class="text-muted fs-7">Gender <i class="fas fa-question-circle" data-bs-toggle="popover" type="button" data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>-->
<!--                                    <div class="col">-->
<!--                                        <div class="border rounded p-2">-->
<!--                                            <label class="form-check-label" for="flexRadioDefault1">Male </label>-->
<!--                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <div class="border rounded p-2">-->
<!--                                            <label class="form-check-label" for="flexRadioDefault1">Female </label>-->
<!--                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <div class="border rounded p-2">-->
<!--                                            <label class="form-check-label" for="flexRadioDefault1">Custom </label>-->
<!--                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--
<!--                                <div class="d-none" id="genderSelect">-->
<!--                                    <select class="form-select">-->
<!--                                        <option value="1">One</option>-->
<!--                                        <option value="2">Two</option>-->
<!--                                        <option value="3">Three</option>-->
<!--                                    </select>-->
<!--                                    <div class="my-3">-->
<!--                                        <span class="text-muted fs-7">Your pronoun is visible to everyone.</span>-->
<!--                                        <input type="text" class="form-control" placeholder="Gender (optional)" />-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- disclaimer -->
                                <div>
                                    <span class="text-muted fs-7">By clicking Sign Up, you agree to our Terms, Data Policy....</span>
                                </div>
                                <!-- btn -->
                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-success btn-lg" data-bs-dismiss="modal">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal end -->
        </div>
        <!-- tag -->
        <div class="my-5 pb-5 text-center">
            <p class="fw-bold"><a href="#" class="text-decoration-none text-dark">Createa a Page</a> <span class="fw-normal">for a celebrity, band or business.</span></p>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg-white p-4 text-muted">
    <div class="container">
        <!-- language -->
        <div class="d-flex flex-wrap">
            <p class="mx-2 fs-7 mb-0">English (US)</p>
            <p class="mx-2 fs-7 mb-0">Tiếng Việt</p>
            <p class="mx-2 fs-7 mb-0">中文(台灣)</p>
            <p class="mx-2 fs-7 mb-0">한국어</p>
            <p class="mx-2 fs-7 mb-0">日本語</p>
        </div>
        <hr />
        <!-- actions -->
        <div class="d-flex flex-wrap">
            <p class="mx-2 fs-7 mb-0">Sign Up</p>
            <p class="mx-2 fs-7 mb-0">Login</p>
            <p class="mx-2 fs-7 mb-0">Messenger</p>
            <p class="mx-2 fs-7 mb-0">Facebook Lite</p>
            <p class="mx-2 fs-7 mb-0">Watch</p>
        </div>
        <!-- copy -->
        <div class="mt-4 mx-2">
            <p class="fs-7">Flexbook &copy; 2023</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    <script src="../../assets/js/main.js"></script>
</body>
</html>