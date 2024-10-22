<x-loggedLayout>
    <sidebar class="sidebar-left">
        <header class="sidebar-left_header">
            <img src="facebook.png" alt="facebook icon">
            <img src="search.png" alt="facebook search">
        </header>
        <footer class="sidebar-left_footer"></footer>
    </sidebar>
    <section class="section" id="section">
        <header class="section-header"></header>
        <section class="section-main">
            <a href="#create-post">
                <img src="#" alt="">
                <p>What is on your mind?</p>
            </a>
        </section>
        @include('components.createPost')
    </section>
    <sidebar class="sidebar-right">
        <header class="sidebar-right_header">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                <path
                    d="M18.5 1A1.5 1.5 0 0 0 17 2.5v3A1.5 1.5 0 0 0 18.5 7h3A1.5 1.5 0 0 0 23 5.5v-3A1.5 1.5 0 0 0 21.5 1h-3zm0 8a1.5 1.5 0 0 0-1.5 1.5v3a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5v-3A1.5 1.5 0 0 0 21.5 9h-3zm-16 8A1.5 1.5 0 0 0 1 18.5v3A1.5 1.5 0 0 0 2.5 23h3A1.5 1.5 0 0 0 7 21.5v-3A1.5 1.5 0 0 0 5.5 17h-3zm8 0A1.5 1.5 0 0 0 9 18.5v3a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5v-3a1.5 1.5 0 0 0-1.5-1.5h-3zm8 0a1.5 1.5 0 0 0-1.5 1.5v3a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5v-3a1.5 1.5 0 0 0-1.5-1.5h-3zm-16-8A1.5 1.5 0 0 0 1 10.5v3A1.5 1.5 0 0 0 2.5 15h3A1.5 1.5 0 0 0 7 13.5v-3A1.5 1.5 0 0 0 5.5 9h-3zm0-8A1.5 1.5 0 0 0 1 2.5v3A1.5 1.5 0 0 0 2.5 7h3A1.5 1.5 0 0 0 7 5.5v-3A1.5 1.5 0 0 0 5.5 1h-3zm8 0A1.5 1.5 0 0 0 9 2.5v3A1.5 1.5 0 0 0 10.5 7h3A1.5 1.5 0 0 0 15 5.5v-3A1.5 1.5 0 0 0 13.5 1h-3zm0 8A1.5 1.5 0 0 0 9 10.5v3a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5v-3A1.5 1.5 0 0 0 13.5 9h-3z">
                </path>
            </svg>
            <svg viewBox="0 0 12 13" width="20" height="20" fill="currentColor">
                <g fill-rule="evenodd" transform="translate(-450 -1073)">
                    <path
                        d="m459.603 1077.948-1.762 2.851a.89.89 0 0 1-1.302.245l-1.402-1.072a.354.354 0 0 0-.433.001l-1.893 1.465c-.253.196-.583-.112-.414-.386l1.763-2.851a.89.89 0 0 1 1.301-.245l1.402 1.072a.354.354 0 0 0 .434-.001l1.893-1.465c.253-.196.582.112.413.386M456 1073.5c-3.38 0-6 2.476-6 5.82 0 1.75.717 3.26 1.884 4.305.099.087.158.21.162.342l.032 1.067a.48.48 0 0 0 .674.425l1.191-.526a.473.473 0 0 1 .32-.024c.548.151 1.13.231 1.737.231 3.38 0 6-2.476 6-5.82 0-3.344-2.62-5.82-6-5.82">
                    </path>
                </g>
            </svg>
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                <path
                    d="M3 9.5a9 9 0 1 1 18 0v2.927c0 1.69.475 3.345 1.37 4.778a1.5 1.5 0 0 1-1.272 2.295h-4.625a4.5 4.5 0 0 1-8.946 0H2.902a1.5 1.5 0 0 1-1.272-2.295A9.01 9.01 0 0 0 3 12.43V9.5zm6.55 10a2.5 2.5 0 0 0 4.9 0h-4.9z">
                </path>
            </svg>
            <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox">
            <label for="menu-toggle">
                <div class="menu-wrapper">
                    <svg viewBox="0 0 24 24" width="20" height="20" aria-label="Your profile"
                        data-visualcompletion="ignore-dynamic" role="img">
                        <mask id=":R6lmoqkqbiq9papd5aq:">
                            <circle cx="10" cy="10" fill="white" r="10"></circle>
                            <circle cx="17" cy="17" data-visualcompletion="ignore" fill="black" r="8">
                            </circle>
                        </mask>
                        <g mask="url(#:R6lmoqkqbiq9papd5aq:)">
                            <image style="height:40px;width:40px" x="0" y="0" height="100%"
                                preserveAspectRatio="xMidYMid slice" width="100%"
                                xlink:href="https://scontent.fmts1-1.fna.fbcdn.net/v/t1.18169-1/558582_10150638224766845_1679956108_n.jpg?stp=c113.33.414.414a_cp0_dst-jpg_s40x40&amp;_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=e4545e&amp;_nc_ohc=nN_MzdI8pHwQ7kNvgH7_shW&amp;_nc_zt=24&amp;_nc_ht=scontent.fmts1-1.fna&amp;oh=00_AYBUowxemKcIDLQrl9jxzCcsGJcT5MQbAd6LDJ3rwgYBdg&amp;oe=673C5555">
                            </image>
                            <circle class="xbh8q5q x1pwv2dq xvlca1e" cx="15" cy="15" r="15"></circle>
                        </g>
                    </svg>
                </div>
                <div class="modal">
                    <form action="/logout" method="post">
                        @csrf
                        <button>Logout</button>
                    </form>
                </div>
            </label>
        </header>
    </sidebar>
</x-loggedLayout>
