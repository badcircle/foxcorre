<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FoxCorRE | FoxCore Real Estate</title>
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/aos.css" />
</head>

<body>
    <div id="mobile-nav">
        <div class="card p-6 mt-6" id="mobile-nav-wrapper">
            <a onclick="removeClassById('mobile-nav', 'is-active');" class="is-pulled-right has-text-dark"><button class="delete is-large"></button></a>
            <div class="menu mt-6" style="width: 300px; max-width: 100%;" data-aos="fade-right" data-aos-delay="200">
                <ul class="menu-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">F.A.Q.</a></li>
                    <li><a href="#">Brokerage Services</a></li>
                    <li>
                        <a>Contact</a>
                        <ul>
                            <li><a href="#">Schedule consultation</a></li>
                            <li><a href="#">Investment opportunity</a></li>
                            <li><a href="#">Send a message</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" id="navigation">
        <div class="section">
            <div class="columns is-mobile is-vcentered">
                <div class="column is-5-desktop is-9-touch">
                    <h1 class="title">
                        <img src="./img/logo.svg" style="max-width: 275px;" alt="">
                    </h1>
                </div>
                <div class="column is-7-desktop is-3-touch">
                    <nav class="navbar" role="navigation" aria-label="main navigation"
                        style="background-color: transparent !important;">
                        <div class="navbar-brand">
                            <button role="button" onclick="addClassById('mobile-nav', 'is-active');" class="navbar-burger" aria-label="menu"
                                aria-expanded="false" data-target="navbar">
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                                <span aria-hidden="true"></span>
                        </button>
                        </div>
                        <div id="navbar" class="navbar-menu">
                            <div class="navbar-start">
                                <a class="navbar-item"> Home </a>

                                <a class="navbar-item"> About </a>

                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link"> Contact </a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item"> Schedule consultation </a>
                                        <a class="navbar-item"> Investment opportunity </a>
                                        <hr class="navbar-divider" />
                                        <a class="navbar-item"> Send a message </a>
                                    </div>
                                </div>

                                <a class="navbar-item"> F.A.Q. </a>

                                <a class="navbar-item"> Brokerage Services </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- <div class="is-divider"></div> -->
            <div class="columns">
                <div class="column is-3">
                    <p class="title is-size-7 purple">a real estate investment & consulting company based in Atlanta</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container is-fluid is-relative" id="hero">
        <div class="container is-fluid bg">
            <svg viewBox="0 10 80 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="triangle">
                <polygon points="0 0, 100 0, 0 100" />
            </svg>
            <svg viewBox="0 -10 80 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="bottom: 0;"
                class="triangle">
                <polygon points="0 84, 0 100, 100 100, 100 0" />
            </svg>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column has-text-white">
                    <h1 data-aos="zoom-out-right"
                        class="is-size-1-tablet is-size-4-touch is-size-2-desktop mt-6 has-text-left wrapped"><span
                            class="px-6" style="background-color: #8a4d76;">join our <span
                                class="display-font ml-3">buyer's list</span></span></h1>
                </div>
            </div>
            <div class="columns is-centered is-mobile pt-6">
                <div class="column is-7-desktop is-10-mobile is-10-tablet">
                    <div class="box p-6" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="700">
                        <div class="block">
                            <div class="columns is-vcentered is-mobile">
                                <div class="column-shrink">
                                    <div class="icon is-large mx-2 has-text-primary">
                                        <i class="mdi mdi-48px mdi-home-lightbulb"></i>
                                    </div>
                                </div>
                                <div class="column is-size-7-touch">
                                    Join today to start receiving accurate, up-to-date market analyses and investment
                                    opportunities. Change your delivery frequency, pause or unsubscribe anytime.
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control has-icons-left">
                                    <input class="input" name="email" type="email" value="" placeholder="Email" />
                                    <span class="icon is-small is-left">
                                        <i class="mdi mdi-email"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control has-icons-left">
                                        <input class="input" name="name" type="text" value="" placeholder="Name" />
                                        <span class="icon is-small is-left">
                                            <i class="mdi mdi-card-account-mail"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Phone</label>
                                    <div class="control has-icons-left">
                                        <input class="input" name="phone" type="phone" value="" placeholder="Phone" />
                                        <span class="icon is-small is-left">
                                            <i class="mdi mdi-cellphone"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="columns is-mobile">
                                <div class="column is-3">
                                    <div class="field">
                                        <div class="control">
                                            <button class="button is-link">Join</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="column" style="align-self: flex-end; margin-bottom: 10px;">
                                    <div class="field has-text-right">
                                        <input id="smsCheckbox" type="checkbox" name="sms" class="checkbox"
                                            checked="checked" />
                                        <label for="smsCheckbox">Receive SMS alerts</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="is-divider" data-content="NOTE"></div>
                        <div class="block">
                            <p class="is-size-7">We market real estate and investment opportunities, not user data. Your
                                information is used only for its stated purpose. We do not sale or share your
                                information without outside parties. Read our <a href="javascript:void(0)">privacy
                                    policy</a> for more information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="columns is-centered">
                <div class="column">
                    <h2 class="is-size-2-desktop is-size-4-mobile is-size-3-tablet has-text-centered p-6"><span
                            class="display-font mr-3 underline-border" style="font-size: 125%;">real solutions</span>
                        <br class="rwd-break" />for real estate investors
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container is-fluid has-background-grey-dark is-relative px-0" style="z-index: 0;" id="stepswrapper">
        <div class="container is-fluid px-0 pb-6">
            <svg viewBox="0 10 80 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="triangle">
                <polygon points="0 0, 100 0, 0 100" />
            </svg>
            <div class="container has-text-white p-6">
                <h1 class="is-size-2 has-text-centered" style="padding-top: 120px; line-height: 1;">solutions made
                    sample</h1>
                <div class="block has-text-centered my-6">
                    <p>
                        The FoxCorRE process is streamlined for finding a property, securing funding, unlocking its
                        value, and selling or leasing that home as soon as possible.
                    </p>
                </div>

                <div class="columns is-multiline is-gapless" id="steps">
                    <div class="column is-half">
                        <div class="tile p-6 has-background-dark first-tile" data-aos="fade-down-right"
                            data-aos-delay="250">
                            <div data-aos="zoom-out" data-aos-delay="550" data-aos-offset="0" data-aos-anchor="#steps">
                                <span class="step">1</span>
                            </div>
                            <div class="block">
                                <div class="title is-size-4 has-text-light"
                                    style="text-indent: -48px; margin-left: 48px;"><span class="icon is-medium mr-2"><i
                                            class="mdi mdi-home-search mdi-36px"
                                            style="margin-right: -136px;"></i></span> Find</div>
                                <div class="subtitle is-size-6 ml-6 has-text-light">We find your perfect investment
                                    property at wholesale discounts targeted to your needs and preferences</div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="tile p-6" style="background-color: #8a4d76;" data-aos="fade-down-left"
                            data-aos-delay="500" data-aos-anchor=".first-tile">
                            <div data-aos="zoom-out" data-aos-delay="800" data-aos-offset="0"><span class="step"
                                    data-aos-anchor=".first-tile">2</span></div>
                            <div class="block">
                                <div class="title is-size-4 has-text-light"
                                    style="text-indent: -48px; margin-left: 48px;"><span class="icon is-medium mr-2"><i
                                            class="mdi mdi-home-edit mdi-36px" style="margin-right: -136px;"></i></span>
                                    Unlock Potential</div>
                                <div class="subtitle is-size-6 ml-6 has-text-light">FoxCorRE provides an estimate for
                                    what should be done to each project to unlock its potential. We provide consultation
                                    and access to an extensive network of knowledgable, licensed third-party cntractors
                                    to help you add the most value to your property.</div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="tile p-6 has-background-light" data-aos="fade-up-right" data-aos-delay="750"
                            data-aos-anchor=".first-tile">
                            <div data-aos="zoom-out" data-aos-delay="950" data-aos-anchor=".first-tile"
                                data-aos-offset="0"><span class="step">3</span></div>
                            <div class="block">
                                <div class="title is-size-4" style="text-indent: -48px; margin-left: 48px;"><span
                                        class="icon is-medium mr-2"><i class="mdi mdi-account-cash mdi-36px"
                                            style="margin-right: -136px;"></i></span> Purchase</div>
                                <div class="subtitle is-size-6 ml-6">You buy the property at a discount to retail value.
                                    We connect you to a top provider of loans specifically for fix &amp; flip, or buy
                                    &amp; hold goals.</div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half" data-aos="fade-up-left" data-aos-delay="1000"
                        data-aos-anchor=".first-tile">
                        <div class="tile p-6 has-background-white">
                            <div data-aos="zoom-out" data-aos-delay="1300" data-aos-anchor=".first-tile"
                                data-aos-offset="0"><span class="step">4</span></div>
                            <div class="block">
                                <div class="title is-size-4" style="text-indent: -48px; margin-left: 48px;"><span
                                        class="icon is-medium mr-2"><i class="mdi mdi-palm-tree mdi-36px"
                                            style="margin-right: -136px;"></i></span> Financial Freedom</div>
                                <div class="subtitle is-size-6 ml-6">You flip your property for a quick profit, or keep
                                    it as a rental, growing you portfolio and collecting cash flow for years.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container is-fluid p-0" id="whyus">
        <div class="container is-fluid">
        </div>
        <svg viewBox="0 10 80 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="triangle">
            <polygon style="fill: #757763" points="0 0, 100 0, 0 100" />
        </svg>
        <svg viewBox="0 -10 80 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="bottom: 0;"
            class="triangle bottom-triangle" data-aos="fade-down">
            <polygon style="fill: #757763" points="0 84, 0 100, 100 100, 100 0" />
        </svg>
        <div class="container">
            <div class="columns mt-1">
                <div class="column has-text-white">
                    <h1 data-aos="fade-down"
                        class="is-size-1-tablet is-size-4-touch is-size-2-desktop mt-6 has-text-left wrapped"><span
                            class="px-6" style="background-color: #8a4d76;">what makes us <span
                                class="display-font ml-3">different</span></span></h1>
                </div>
            </div>
            <div class="columns p-6 is-gapless" style="margin-bottom: 150px;">
                <div class="column is-relative">
                    <div class="card is-radiusless is-relative p-6 first-card" style="height: 100%;"
                        data-aos="fade-right" data-aos-delay="250">
                        <div class="block">
                            <div class="title is-size-5">Experienced acquisition agents</div>
                            <p class="subtitle is-size-6">Why spend all your time looking for real estate investment
                                deals when you can have our licensed Brokerage find the best property matches for your
                                investment portfolio?</p>
                        </div>
                        <div class="block">
                            <div class="title is-size-5">Brokerage options catered to you</div>
                            <p class="subtitle is-size-6">When it is time to sell or lease your property, we have
                                self-service as well as full-service brokerage options.</p>
                        </div>
                        <div class="block">
                            <div class="title is-size-5">Highly rated</div>
                            <p class="subtitle is-size-6">See our ratings &mdash; we are highly rated and well known for
                                our quality and honesty.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-relative">
                    <div class="card is-radiusless is-relative p-6" style="height: 100%;" data-aos="fade-left"
                        data-aos-delay="500">
                        <div class="block">
                            <div class="title is-size-5">Off-market properties</div>
                            <p class="subtitle is-size-6">Our Brokerage delivers properties both on and off the Multiple
                                Listing Service. This gives you a 360-degree approach to finding the perfect investment
                                property. Our properties are up to 50% off market value and delivered straight to your
                                inbox.</p>
                        </div>
                        <div class="block">
                            <div class="title is-size-5">Mentorship</div>
                            <p class="subtitle is-size-6">We guide you with a simplified solution for your real estate
                                investment outcomes.</p>
                        </div>
                        <div class="block">
                            <div class="title is-size-5">Integrity</div>
                            <p class="subtitle is-size-6">Our interest is looking out for your best interest. With
                                impeccable morals down to our core, we will provide you with a flawless experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container is-fluid" id="footer" data-aos="fade-down" data-aos-anchor=".bottom-triangle">
        <div class="container">
            <div class="section">
                <div class="columns">
                    <div class="column is-one-half">
                        <aside class="menu has-text-white px-6 pt-6" data-aos="fade-right" data-aos-delay="200"
                            data-aos-anchor="#footer">
                            <ul class="menu-list has-text-white">
                                <li><a>Home</a></li>
                                <li><a>About</a></li>
                                <li><a>F.A.Q.</a></li>
                                <li><a>Brokerage Services</a></li>
                                <li>
                                    <a>Contact</a>
                                    <ul>
                                        <li><a>Schedule consultation</a></li>
                                        <li><a>Investment opportunity</a></li>
                                        <li><a>Send a message</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="column is-one-half is-align-self-flex-end">
                        <div class="block p-5">
                            <div class="block">
                                <p>&copy; 2022 FoxCor Real Estate</p>
                            </div>
                            <div class="block p-5 has-text-dark is-size-7" data-aos="zoom-in"
                                style="background-color: rgba(255, 255, 255, 0.75);">
                                <p>Anu Jain and Manesh Hardeo are the owners of FoxCor Real Estate. These Atlanta locals
                                    are energized by genuine passion for helping people achieve success with their real
                                    estate goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/aos.js"></script>
    <script>
        AOS.init({
            useClassNames: true,
            once: false
        });
        function addClassById(e, className) {
            var element = document.getElementById(e);
            element.classList.add(className);
        } 
        function removeClassById(e, className) {
            var element = document.getElementById(e);
            element.classList.remove(className);
        } 
    </script>
</body>

</html>