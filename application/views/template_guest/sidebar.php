 <!--Jangan mengubah template kecuali memang sangat diperlukan, takut ancur tampilannya-->
 <!--Untuk Header Footer dan Sidebar sudah memakai Template-->
<body class="layout-sticky-subnav layout-default ">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0" data-effects="parallax-background waterfall" data-fixed data-condenses>
            <div class="mdk-header__bg">
                <div class="mdk-header__bg-front" style="background-image: url(assets/images/photodune-4161018-group-of-students-m.jpg);"></div>
            </div>
            <div class="mdk-header__content justify-content-center">



                <div class="navbar navbar-expand navbar-dark-dodger-blue bg-transparent will-fade-background" id="default-navbar" data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block rounded-0" type="button" data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="fixed-index.html" class="navbar-brand mr-16pt">
                        <!-- <img class="navbar-brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">Luma</span>
                    </a>

                    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                        <li class="nav-item active">
                            <a href="fixed-index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Courses</a>
                            <div class="dropdown-menu">
                                <a href="fixed-courses.html" class="dropdown-item">Browse Courses</a>
                                <a href="fixed-student-course.html" class="dropdown-item">Preview Course</a>
                                <a href="fixed-student-lesson.html" class="dropdown-item">Preview Lesson</a>
                                <a href="fixed-student-take-course.html" class="dropdown-item"><span class="mr-16pt">Take Course</span> <span class="badge badge-notifications badge-accent text-uppercase ml-auto">Pro</span></a>
                                <a href="fixed-student-take-lesson.html" class="dropdown-item">Take Lesson</a>
                                <a href="fixed-student-take-quiz.html" class="dropdown-item">Take Quiz</a>
                                <a href="fixed-student-quiz-result-details.html" class="dropdown-item">Quiz Result</a>
                                <a href="fixed-student-dashboard.html" class="dropdown-item">Student Dashboard</a>
                                <a href="fixed-student-my-courses.html" class="dropdown-item">My Courses</a>
                                <a href="fixed-student-quiz-results.html" class="dropdown-item">My Quizzes</a>
                                <a href="fixed-help-center.html" class="dropdown-item">Help Center</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Paths</a>
                            <div class="dropdown-menu">
                                <a href="fixed-paths.html" class="dropdown-item">Browse Paths</a>
                                <a href="fixed-student-path.html" class="dropdown-item">Path Details</a>
                                <a href="fixed-student-path-assessment.html" class="dropdown-item">Skill Assessment</a>
                                <a href="fixed-student-path-assessment-result.html" class="dropdown-item">Skill Result</a>
                                <a href="fixed-student-paths.html" class="dropdown-item">My Paths</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="fixed-pricing.html" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Teachers</a>
                            <div class="dropdown-menu">
                                <a href="fixed-instructor-dashboard.html" class="dropdown-item">Instructor Dashboard</a>
                                <a href="fixed-instructor-courses.html" class="dropdown-item">Manage Courses</a>
                                <a href="fixed-instructor-quizzes.html" class="dropdown-item">Manage Quizzes</a>
                                <a href="fixed-instructor-earnings.html" class="dropdown-item">Earnings</a>
                                <a href="fixed-instructor-statement.html" class="dropdown-item">Statement</a>
                                <a href="fixed-instructor-edit-course.html" class="dropdown-item">Edit Course</a>
                                <a href="fixed-instructor-edit-quiz.html" class="dropdown-item">Edit Quiz</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" data-toggle="tooltip" data-title="Community" data-placement="bottom" data-boundary="window">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                <i class="material-icons">people_outline</i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="fixed-teachers.html" class="dropdown-item">Browse Teachers</a>
                                <a href="fixed-student-profile.html" class="dropdown-item">Student Profile</a>
                                <a href="fixed-teacher-profile.html" class="dropdown-item">Instructor Profile</a>
                                <a href="fixed-blog.html" class="dropdown-item">Blog</a>
                                <a href="fixed-blog-post.html" class="dropdown-item">Blog Post</a>
                                <a href="fixed-faq.html" class="dropdown-item">FAQ</a>
                                <a href="fixed-help-center.html" class="dropdown-item">Help Center</a>
                                <a href="fixed-discussions.html" class="dropdown-item">Discussions</a>
                                <a href="fixed-discussion.html" class="dropdown-item">Discussion Details</a>
                                <a href="fixed-discussions-ask.html" class="dropdown-item">Ask Question</a>
                            </div>
                        </li>
                    </ul>








                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="fixed-login.html" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="fixed-signup.html" class="btn btn-outline-white">Get Started</a>
                        </li>
                    </ul>
                </div>

                <div class="hero container page__container text-center text-md-left py-112pt">
                    <h1 class="text-white text-shadow">Learn to Code</h1>
                    <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>


                    <a href="fixed-courses.html" class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>


                    <p class="mb-0"><a href="" class="text-white text-shadow"><strong>Are you a teacher?</strong></a></p>

                </div>
            </div>
        </div>

        <!-- // END Header -->
        <!-- drawer -->
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


                <div class="d-flex align-items-center navbar-height">
                    <form action="fixed-index.html" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                        <input type="text" class="form-control pl-0" placeholder="Search">
                        <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>



                <a href="fixed-index.html" class="sidebar-brand ">
                    <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                    <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                        <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                    </span>

                    <span>Luma</span>
                </a>



                <div class="sidebar-heading">Student</div>
                <ul class="sidebar-menu">


                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button" href="fixed-index.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                            <span class="sidebar-menu-text">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-courses.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                            <span class="sidebar-menu-text">Browse Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-paths.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                            <span class="sidebar-menu-text">Browse Paths</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-dashboard.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                            <span class="sidebar-menu-text">Student Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-my-courses.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                            <span class="sidebar-menu-text">My Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-paths.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                            <span class="sidebar-menu-text">My Paths</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-path.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                            <span class="sidebar-menu-text">Path Details</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-course.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                            <span class="sidebar-menu-text">Course Preview</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-lesson.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                            <span class="sidebar-menu-text">Lesson Preview</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-take-course.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                            <span class="sidebar-menu-text">Take Course</span>
                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-take-lesson.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                            <span class="sidebar-menu-text">Take Lesson</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-take-quiz.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                            <span class="sidebar-menu-text">Take Quiz</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-quiz-results.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                            <span class="sidebar-menu-text">My Quizzes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-quiz-result-details.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                            <span class="sidebar-menu-text">Quiz Result</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-path-assessment.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                            <span class="sidebar-menu-text">Skill Assessment</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-student-path-assessment-result.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                            <span class="sidebar-menu-text">Skill Result</span>
                        </a>
                    </li>

                </ul>
                <div class="sidebar-heading">Instructor</div>
                <ul class="sidebar-menu">


                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-dashboard.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-courses.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                            <span class="sidebar-menu-text">Manage Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-quizzes.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                            <span class="sidebar-menu-text">Manage Quizzes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-earnings.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                            <span class="sidebar-menu-text">Earnings</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-statement.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                            <span class="sidebar-menu-text">Statement</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-edit-course.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                            <span class="sidebar-menu-text">Edit Course</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fixed-instructor-edit-quiz.html">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                            <span class="sidebar-menu-text">Edit Quiz</span>
                        </a>
                    </li>

                </ul>




                <div class="sidebar-heading">Applications</div>
                <ul class="sidebar-menu">



                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                            Enterprise
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-erp-dashboard.html">
                                    <span class="sidebar-menu-text">ERP Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-crm-dashboard.html">
                                    <span class="sidebar-menu-text">CRM Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-hr-dashboard.html">
                                    <span class="sidebar-menu-text">HR Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-employees.html">
                                    <span class="sidebar-menu-text">Employees</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-staff.html">
                                    <span class="sidebar-menu-text">Staff</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-leaves.html">
                                    <span class="sidebar-menu-text">Leaves</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-departments.html">
                                    <span class="sidebar-menu-text">Departments</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                            Productivity
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-projects.html">
                                    <span class="sidebar-menu-text">Projects</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-tasks-board.html">
                                    <span class="sidebar-menu-text">Tasks Board</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-tasks-list.html">
                                    <span class="sidebar-menu-text">Tasks List</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-kanban.html">
                                    <span class="sidebar-menu-text">Kanban</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                            eCommerce
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ecommerce.html">
                                    <span class="sidebar-menu-text">Shop Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-edit-product.html">
                                    <span class="sidebar-menu-text">Edit Product</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#messaging_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                            Messaging
                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>
                            <span class="sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="messaging_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-messages.html">
                                    <span class="sidebar-menu-text">Messages</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-email.html">
                                    <span class="sidebar-menu-text">Email</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                            CMS
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-cms-dashboard.html">
                                    <span class="sidebar-menu-text">CMS Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-posts.html">
                                    <span class="sidebar-menu-text">Posts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                            Account
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-pricing.html">
                                    <span class="sidebar-menu-text">Pricing</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-login.html">
                                    <span class="sidebar-menu-text">Login</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-signup.html">
                                    <span class="sidebar-menu-text">Signup</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-signup-payment.html">
                                    <span class="sidebar-menu-text">Payment</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-reset-password.html">
                                    <span class="sidebar-menu-text">Reset Password</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-change-password.html">
                                    <span class="sidebar-menu-text">Change Password</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account.html">
                                    <span class="sidebar-menu-text">Edit Account</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account-profile.html">
                                    <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account-notifications.html">
                                    <span class="sidebar-menu-text">Email Notifications</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account-password.html">
                                    <span class="sidebar-menu-text">Account Password</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing.html">
                                    <span class="sidebar-menu-text">Subscription</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-upgrade.html">
                                    <span class="sidebar-menu-text">Upgrade Account</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-payment.html">
                                    <span class="sidebar-menu-text">Payment Information</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-history.html">
                                    <span class="sidebar-menu-text">Payment History</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-invoice.html">
                                    <span class="sidebar-menu-text">Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                            Community
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-teachers.html">

                                    <span class="sidebar-menu-text">Browse Teachers</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-profile.html">

                                    <span class="sidebar-menu-text">Student Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-teacher-profile.html">

                                    <span class="sidebar-menu-text">Teacher Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-blog.html">

                                    <span class="sidebar-menu-text">Blog</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-blog-post.html">

                                    <span class="sidebar-menu-text">Blog Post</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-faq.html">
                                    <span class="sidebar-menu-text">FAQ</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-help-center.html">
                                    <!--  -->
                                    <span class="sidebar-menu-text">Help Center</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussions.html">
                                    <span class="sidebar-menu-text">Discussions</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussion.html">
                                    <span class="sidebar-menu-text">Discussion Details</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussions-ask.html">
                                    <span class="sidebar-menu-text">Ask Question</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


                <div class="sidebar-heading">UI</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                            Components
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-buttons.html">
                                    <span class="sidebar-menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-avatars.html">
                                    <span class="sidebar-menu-text">Avatars</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-forms.html">
                                    <span class="sidebar-menu-text">Forms</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-loaders.html">
                                    <span class="sidebar-menu-text">Loaders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-tables.html">
                                    <span class="sidebar-menu-text">Tables</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-cards.html">
                                    <span class="sidebar-menu-text">Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-icons.html">
                                    <span class="sidebar-menu-text">Icons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-tabs.html">
                                    <span class="sidebar-menu-text">Tabs</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-alerts.html">
                                    <span class="sidebar-menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-badges.html">
                                    <span class="sidebar-menu-text">Badges</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-progress.html">
                                    <span class="sidebar-menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-pagination.html">
                                    <span class="sidebar-menu-text">Pagination</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="">
                                    <span class="sidebar-menu-text">Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#plugins_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                            Plugins
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="plugins_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-charts.html">
                                    <span class="sidebar-menu-text">Charts</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-flatpickr.html">
                                    <span class="sidebar-menu-text">Flatpickr</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-daterangepicker.html">
                                    <span class="sidebar-menu-text">Date Range Picker</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-dragula.html">
                                    <span class="sidebar-menu-text">Dragula</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-dropzone.html">
                                    <span class="sidebar-menu-text">Dropzone</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-range-sliders.html">
                                    <span class="sidebar-menu-text">Range Sliders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-quill.html">
                                    <span class="sidebar-menu-text">Quill</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-select2.html">
                                    <span class="sidebar-menu-text">Select2</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-nestable.html">
                                    <span class="sidebar-menu-text">Nestable</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-fancytree.html">
                                    <span class="sidebar-menu-text">Fancy Tree</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-maps-vector.html">
                                    <span class="sidebar-menu-text">Vector Maps</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-sweet-alert.html">
                                    <span class="sidebar-menu-text">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-toastr.html">
                                    <span class="sidebar-menu-text">Toastr</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="">
                                    <span class="sidebar-menu-text">Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                            Layouts
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="layouts_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="compact-index.html">
                                    <span class="sidebar-menu-text">Compact</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="mini-index.html">
                                    <span class="sidebar-menu-text">Mini</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="mini-secondary-index.html">
                                    <span class="sidebar-menu-text">Mini + Secondary</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="index.html">
                                    <span class="sidebar-menu-text">App</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="boxed-index.html">
                                    <span class="sidebar-menu-text">Boxed</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="sticky-index.html">
                                    <span class="sidebar-menu-text">Sticky</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="fixed-index.html">
                                    <span class="sidebar-menu-text">Fixed</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </div>
    <!-- // END drawer -->
