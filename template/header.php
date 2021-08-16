<!-- ..::NAVEGACION::.. -->
<header>
    <h2 class="section-name"><?php echo $title?></h2>
    <div class="container">
        <input type="checkbox" name="" id="check2">

        <div class="nav-btn2">
            <div class="nav-links">
                <ul>
                    <li class="nav-link" style="--i: .6s">
                        <div>
                            <a href="tel:+5042785-1242"><i class="fas fa-phone-alt icono"></i> 2785-1242 &nbsp; / </a>
                            <a href="tel:+5049549-1910">&nbsp; 9549-1910</a>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: .6s">
                        <div>
                            <a href="https://goo.gl/maps/krfjQNEaQBAeq4YJ6" target="_blank"><i class="fas fa-map-marker-alt icono"></i>Brilliant Mind's School</a>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: .6s">
                        <div>
                            <a href="mailto:info@brilliantmindshn.com"><i class="fas fa-envelope-open icono"></i> info@brilliantmindshn.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="hamburger-menu-container">
            <div class="hamburger-menu2">
                <div></div>
            </div>
        </div>

        <input type="checkbox" name="" id="check">

        <div class="nav-btn">
            <a href="<?= $host_name?>/index.php">
                <div class="logo-container">
                    <img class="logo" src="<?= $host_name?>/assets/img/logo.png"></img>
                    <div class="logo-text">
                        <h2>Brilliant Mind's</h2>
                        <h2>School</h2>
                    </div>
                </div>
            </a>
            <div class="nav-links">
                <ul class="flex">
                    <li class="nav-link" style="--i: .6s">
                        <a href="<?= $host_name?>/index.php" class="home">Home</a>
                    </li>
                    <li class="nav-link" style="--i: .6s">
                        <a href="<?= $host_name?>/about.php" class="about_us">About</a>
                    </li>
                    <li class="nav-link" style="--i: .85s">
                        <a href="<?= $host_name?>/academics.php" class="academics">Academics<i class="fas fa-caret-down ml-10"></i></a>
                        <div class="dropdown">
                            <ul>
                                <li class="dropdown-link">
                                    <a>Kinder Garden<i class="fas fa-caret-down"></i></a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/k4.php">K4</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/k5.php">K5</a>
                                            </li>
                                            <div class="arrow"></div>
                                        </ul>
                                        
                                    </div>
                                </li>
                                <li class="dropdown-link">
                                    <a>Elementary <i class="fas fa-caret-down"></i></a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/1st-Grade-A.php">1st Grade - A</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/1st-Grade-B.php">1st Grade - B</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/2nd-Grade-A.php">2nd Grade - A</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/2nd-Grade-B.php">2nd Grade - B</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/3rd-Grade.php">3rd Grade</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/4th-Grade.php">4th Grade</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/5th-Grade.php">5th Grade</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/mrs-walveska-ruiz.php">Mrs Walveska Ruiz</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/6th-Grade.php">6th Grade</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/mrs-elsy-zelaya.php">Mrs. Elsy Zelaya</a>
                                            </li>
                                            <div class="arrow"></div>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-link">
                                    <a>Middle School<i class="fas fa-caret-down"></i></a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/7th-Grade.php">7th Grade</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/8th-Grade.php">8th Grade</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="<?= $host_name?>/academics/9th-Grade.php">9th Grade</a>
                                            </li>
                                            <div class="arrow"></div>
                                        </ul>
                                    </div>
                                </li>
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: 1.1s">
                        <a href="<?= $host_name?>/aplications.php" class="aplications">Aplications<i class="fas fa-caret-down ml-10"></i></a>
                        <div class="dropdown">
                            <ul>
                                <li class="dropdown-link">
                                    <a href="<?= $host_name?>/aplications/kinder-y-preparatoria.php">Kinder y Preparatoria</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="<?= $host_name?>/aplications/3rd,-4th,-5th-and-6th-grade.php">3rd, 4th, 5th and 6th Grade</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="<?= $host_name?>/aplications/7th,-8th-and-9th-grade.php">7th , 8th and 9th Grade</a>
                                </li>
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: 1.35s">
                        <a href="<?= $host_name?>/events.php" class="eventos">Events</a>
                    </li>
                    <li class="nav-link" style="--i: 1.35s">
                        <a href="<?= $host_name?>/resources.php" class="resources">Resources</a>
                    </li>
                    <li class="nav-link" style="--i: 1.35s">
                        <a href="<?= $host_name?>/contact.php" class="contact-us">Contact-Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="hamburger-menu-container">
            <div class="hamburger-menu">
                <div></div>
            </div>
        </div>
    
    </div>
</header>