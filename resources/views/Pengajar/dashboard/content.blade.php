<section class="pt-0">
    <div class="container">
        <div class="row">
            @include('pengajar.component.offcanvas')

            <div class="col-xl-9">

                <!-- Counter boxes START -->
                <div class="row g-4">
                    <!-- Counter item -->
                    <div class="col-sm-6 col-lg-4">
                        <div
                            class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
                            <span class="display-6 text-warning mb-0"><i class="fas fa-tv fa-fw"></i></span>
                            <div class="ms-4">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="25" data-purecounter-delay="200"
                                        data-purecounter-duration="0">25</h5>
                                </div>
                                <span class="mb-0 h6 fw-light">Total Courses</span>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-lg-4">
                        <div
                            class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
                            <span class="display-6 text-purple mb-0"><i class="fas fa-user-graduate fa-fw"></i></span>
                            <div class="ms-4">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="25" data-purecounter-delay="200"
                                        data-purecounter-duration="0">25</h5>
                                    <span class="mb-0 h5">K+</span>
                                </div>
                                <span class="mb-0 h6 fw-light">Total Students</span>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-lg-4">
                        <div
                            class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
                            <span class="display-6 text-info mb-0"><i class="fas fa-gem fa-fw"></i></span>
                            <div class="ms-4">
                                <div class="d-flex">
                                    <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="12" data-purecounter-delay="300"
                                        data-purecounter-duration="0">12</h5>
                                    <span class="mb-0 h5">K</span>
                                </div>
                                <span class="mb-0 h6 fw-light">Enrolled Students</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter boxes END -->

                {{-- <!-- Chart START -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-transparent border p-4 h-100">
                            <div class="row g-4">
                                <!-- Content -->
                                <div class="col-sm-6 col-md-4">
                                    <span class="badge text-bg-dark">Current Month</span>
                                    <h4 class="text-primary my-2">$35000</h4>
                                    <p class="mb-0"><span class="text-success me-1">0.20%<i
                                                class="bi bi-arrow-up"></i></span>vs last month</p>
                                </div>
                                <!-- Content -->
                                <div class="col-sm-6 col-md-4">
                                    <span class="badge text-bg-dark">Last Month</span>
                                    <h4 class="my-2">$28000</h4>
                                    <p class="mb-0"><span class="text-danger me-1">0.10%<i
                                                class="bi bi-arrow-down"></i></span>Then last month</p>
                                </div>
                            </div>

                            <!-- Apex chart -->
                            <div id="ChartPayout" style="min-height: 315px;">
                                <div id="apexchartsgji1hmoh"
                                    class="apexcharts-canvas apexchartsgji1hmoh apexcharts-theme-light"
                                    style="width: 1002px; height: 300px;"><svg id="SvgjsSvg1495" width="1002"
                                        height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1497" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(51.93027305603027, 30)">
                                            <defs id="SvgjsDefs1496">
                                                <clipPath id="gridRectMaskgji1hmoh">
                                                    <rect id="SvgjsRect1503" width="936.7564458847046"
                                                        height="235.700799074173" x="-4" y="-2"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskgji1hmoh"></clipPath>
                                                <clipPath id="nonForecastMaskgji1hmoh"></clipPath>
                                                <clipPath id="gridRectMarkerMaskgji1hmoh">
                                                    <rect id="SvgjsRect1504" width="932.7564458847046"
                                                        height="235.700799074173" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1541" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1542" stop-opacity="0.65"
                                                        stop-color="rgba(6,106,201,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1543" stop-opacity="0.5"
                                                        stop-color="rgba(131,181,228,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1544" stop-opacity="0.5"
                                                        stop-color="rgba(131,181,228,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1502" x1="0" y1="0" x2="0"
                                                y2="231.700799074173" stroke="#b6b6b6" stroke-dasharray="3"
                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="231.700799074173" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1558" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1559" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1561"
                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                        y="260.700799074173" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1562">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1564"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="92.87564458847048" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1565">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1567"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="185.75128917694093" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1568">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1570"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="278.6269337654114" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1571">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1573"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="371.5025783538819" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1574">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1576"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="464.37822294235235" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1577">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText1579"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="557.2538675308227" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1580">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text><text id="SvgjsText1582"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="650.1295121192932" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1583">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text><text id="SvgjsText1585"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="743.0051567077636" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1586">Oct </tspan>
                                                        <title>Oct </title>
                                                    </text><text id="SvgjsText1588"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="835.880801296234" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1589">Nov</tspan>
                                                        <title>Nov</title>
                                                    </text><text id="SvgjsText1591"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="928.7564458847045" y="260.700799074173"
                                                        text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1592">Dec</tspan>
                                                        <title>Dec</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1609" class="apexcharts-grid">
                                                <g id="SvgjsG1610" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1612" x1="0" y1="0"
                                                        x2="928.7564458847046" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1613" x1="0" y1="38.6167998456955"
                                                        x2="928.7564458847046" y2="38.6167998456955" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1614" x1="0" y1="77.233599691391"
                                                        x2="928.7564458847046" y2="77.233599691391" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1615" x1="0" y1="115.8503995370865"
                                                        x2="928.7564458847046" y2="115.8503995370865"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1616" x1="0" y1="154.467199382782"
                                                        x2="928.7564458847046" y2="154.467199382782" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1617" x1="0" y1="193.08399922847752"
                                                        x2="928.7564458847046" y2="193.08399922847752"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1618" x1="0" y1="231.70079907417303"
                                                        x2="928.7564458847046" y2="231.70079907417303"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1611" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1620" x1="0" y1="231.700799074173"
                                                    x2="928.7564458847046" y2="231.700799074173" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1619" x1="0" y1="1"
                                                    x2="0" y2="231.700799074173" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1505" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1506" class="apexcharts-series" seriesName="Payout"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1545"
                                                        d="M 0 231.700799074173L 0 91.28046063526276C 32.50647560596465 91.28046063526276 60.3691689825058 170.9276103170097 92.87564458847045 170.9276103170097C 125.3821201944351 170.9276103170097 153.24481357097625 185.8433492574096 185.7512891769409 185.8433492574096C 218.25776478290555 185.8433492574096 246.1204581594467 156.25322637564543 278.62693376541137 156.25322637564543C 311.13340937137605 156.25322637564543 338.9961027479171 143.60622442618015 371.5025783538818 143.60622442618015C 404.0090539598465 143.60622442618015 431.8717473363876 109.76825356138947 464.3782229423523 109.76825356138947C 496.8846985483169 109.76825356138947 524.7473919248581 134.67608946186306 557.2538675308227 134.67608946186306C 589.7603431367874 134.67608946186306 617.6230365133285 74.33733970296385 650.1295121192932 74.33733970296385C 682.6359877252578 74.33733970296385 710.498681101799 86.6464446537793 743.0051567077636 86.6464446537793C 775.5116323137282 86.6464446537793 803.3743256902694 45.374739818692234 835.880801296234 45.374739818692234C 868.3872769021988 45.374739818692234 896.2499702787399 36.734230853217866 928.7564458847046 36.734230853217866C 928.7564458847046 36.734230853217866 928.7564458847046 36.734230853217866 928.7564458847046 231.700799074173M 928.7564458847046 36.734230853217866z"
                                                        fill="url(#SvgjsLinearGradient1541)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskgji1hmoh)"
                                                        pathTo="M 0 231.700799074173L 0 91.28046063526276C 32.50647560596465 91.28046063526276 60.3691689825058 170.9276103170097 92.87564458847045 170.9276103170097C 125.3821201944351 170.9276103170097 153.24481357097625 185.8433492574096 185.7512891769409 185.8433492574096C 218.25776478290555 185.8433492574096 246.1204581594467 156.25322637564543 278.62693376541137 156.25322637564543C 311.13340937137605 156.25322637564543 338.9961027479171 143.60622442618015 371.5025783538818 143.60622442618015C 404.0090539598465 143.60622442618015 431.8717473363876 109.76825356138947 464.3782229423523 109.76825356138947C 496.8846985483169 109.76825356138947 524.7473919248581 134.67608946186306 557.2538675308227 134.67608946186306C 589.7603431367874 134.67608946186306 617.6230365133285 74.33733970296385 650.1295121192932 74.33733970296385C 682.6359877252578 74.33733970296385 710.498681101799 86.6464446537793 743.0051567077636 86.6464446537793C 775.5116323137282 86.6464446537793 803.3743256902694 45.374739818692234 835.880801296234 45.374739818692234C 868.3872769021988 45.374739818692234 896.2499702787399 36.734230853217866 928.7564458847046 36.734230853217866C 928.7564458847046 36.734230853217866 928.7564458847046 36.734230853217866 928.7564458847046 231.700799074173M 928.7564458847046 36.734230853217866z"
                                                        pathFrom="M -1 231.700799074173L -1 231.700799074173L 92.87564458847045 231.700799074173L 185.7512891769409 231.700799074173L 278.62693376541137 231.700799074173L 371.5025783538818 231.700799074173L 464.3782229423523 231.700799074173L 557.2538675308227 231.700799074173L 650.1295121192932 231.700799074173L 743.0051567077636 231.700799074173L 835.880801296234 231.700799074173L 928.7564458847046 231.700799074173">
                                                    </path>
                                                    <path id="SvgjsPath1546"
                                                        d="M 0 91.28046063526276C 32.50647560596465 91.28046063526276 60.3691689825058 170.9276103170097 92.87564458847045 170.9276103170097C 125.3821201944351 170.9276103170097 153.24481357097625 185.8433492574096 185.7512891769409 185.8433492574096C 218.25776478290555 185.8433492574096 246.1204581594467 156.25322637564543 278.62693376541137 156.25322637564543C 311.13340937137605 156.25322637564543 338.9961027479171 143.60622442618015 371.5025783538818 143.60622442618015C 404.0090539598465 143.60622442618015 431.8717473363876 109.76825356138947 464.3782229423523 109.76825356138947C 496.8846985483169 109.76825356138947 524.7473919248581 134.67608946186306 557.2538675308227 134.67608946186306C 589.7603431367874 134.67608946186306 617.6230365133285 74.33733970296385 650.1295121192932 74.33733970296385C 682.6359877252578 74.33733970296385 710.498681101799 86.6464446537793 743.0051567077636 86.6464446537793C 775.5116323137282 86.6464446537793 803.3743256902694 45.374739818692234 835.880801296234 45.374739818692234C 868.3872769021988 45.374739818692234 896.2499702787399 36.734230853217866 928.7564458847046 36.734230853217866"
                                                        fill="none" fill-opacity="1" stroke="#066ac9"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskgji1hmoh)"
                                                        pathTo="M 0 91.28046063526276C 32.50647560596465 91.28046063526276 60.3691689825058 170.9276103170097 92.87564458847045 170.9276103170097C 125.3821201944351 170.9276103170097 153.24481357097625 185.8433492574096 185.7512891769409 185.8433492574096C 218.25776478290555 185.8433492574096 246.1204581594467 156.25322637564543 278.62693376541137 156.25322637564543C 311.13340937137605 156.25322637564543 338.9961027479171 143.60622442618015 371.5025783538818 143.60622442618015C 404.0090539598465 143.60622442618015 431.8717473363876 109.76825356138947 464.3782229423523 109.76825356138947C 496.8846985483169 109.76825356138947 524.7473919248581 134.67608946186306 557.2538675308227 134.67608946186306C 589.7603431367874 134.67608946186306 617.6230365133285 74.33733970296385 650.1295121192932 74.33733970296385C 682.6359877252578 74.33733970296385 710.498681101799 86.6464446537793 743.0051567077636 86.6464446537793C 775.5116323137282 86.6464446537793 803.3743256902694 45.374739818692234 835.880801296234 45.374739818692234C 868.3872769021988 45.374739818692234 896.2499702787399 36.734230853217866 928.7564458847046 36.734230853217866"
                                                        pathFrom="M -1 231.700799074173L -1 231.700799074173L 92.87564458847045 231.700799074173L 185.7512891769409 231.700799074173L 278.62693376541137 231.700799074173L 371.5025783538818 231.700799074173L 464.3782229423523 231.700799074173L 557.2538675308227 231.700799074173L 650.1295121192932 231.700799074173L 743.0051567077636 231.700799074173L 835.880801296234 231.700799074173L 928.7564458847046 231.700799074173">
                                                    </path>
                                                    <g id="SvgjsG1507" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1626" r="0"
                                                                cx="0" cy="0"
                                                                class="apexcharts-marker wgr37ttm3 no-pointer-events"
                                                                stroke="#ffffff" fill="#066ac9" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1508" class="apexcharts-datalabels" data:realIndex="0">
                                                    <g id="SvgjsG1509" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1547" width="35.22148513793945"
                                                            height="15.600000381469727" x="-17.350000381469727"
                                                            y="81.0804672241211" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1511"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="93.28046063526276" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="0"
                                                            cy="93.28046063526276"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2909</text>
                                                        <rect id="SvgjsRect1548" width="35.22148513793945"
                                                            height="15.600000381469727" x="75.52565002441406"
                                                            y="160.7276153564453" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1513"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="92.87564458847045" y="172.9276103170097"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="92.87564458847045"
                                                            cy="172.9276103170097"
                                                            style="font-family: Helvetica, Arial, sans-serif;">1259</text>
                                                    </g>
                                                    <g id="SvgjsG1514" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1549" width="28.547657012939453"
                                                            height="15.600000381469727" x="171.73880004882812"
                                                            y="175.6433563232422" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1516"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="185.7512891769409" y="187.8433492574096"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="185.7512891769409"
                                                            cy="187.8433492574096"
                                                            style="font-family: Helvetica, Arial, sans-serif;">950</text>
                                                    </g>
                                                    <g id="SvgjsG1517" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1550" width="35.22148513793945"
                                                            height="15.600000381469727" x="261.2769470214844"
                                                            y="146.05322265625" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1519"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="278.62693376541137" y="158.25322637564543"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="278.62693376541137"
                                                            cy="158.25322637564543"
                                                            style="font-family: Helvetica, Arial, sans-serif;">1563</text>
                                                    </g>
                                                    <g id="SvgjsG1520" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1551" width="35.22148513793945"
                                                            height="15.600000381469727" x="354.1525573730469"
                                                            y="133.40623474121094" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1522"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="371.5025783538818" y="145.60622442618015"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="371.5025783538818"
                                                            cy="145.60622442618015"
                                                            style="font-family: Helvetica, Arial, sans-serif;">1825</text>
                                                    </g>
                                                    <g id="SvgjsG1523" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1552" width="35.22148513793945"
                                                            height="15.600000381469727" x="447.0282287597656"
                                                            y="99.5682601928711" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1525"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="464.3782229423523" y="111.76825356138947"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="464.3782229423523"
                                                            cy="111.76825356138947"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2526</text>
                                                    </g>
                                                    <g id="SvgjsG1526" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1553" width="35.22148513793945"
                                                            height="15.600000381469727" x="539.9038696289062"
                                                            y="124.47608947753906" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1528"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="557.2538675308227" y="136.67608946186306"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="557.2538675308227"
                                                            cy="136.67608946186306"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2010</text>
                                                    </g>
                                                    <g id="SvgjsG1529" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1554" width="35.22148513793945"
                                                            height="15.600000381469727" x="632.7794799804688"
                                                            y="64.13734436035156" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1531"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="650.1295121192932" y="76.33733970296385"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="650.1295121192932"
                                                            cy="76.33733970296385"
                                                            style="font-family: Helvetica, Arial, sans-serif;">3260</text>
                                                    </g>
                                                    <g id="SvgjsG1532" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1555" width="35.22148513793945"
                                                            height="15.600000381469727" x="725.6551513671875"
                                                            y="76.44644927978516" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1534"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="743.0051567077636" y="88.6464446537793"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="743.0051567077636"
                                                            cy="88.6464446537793"
                                                            style="font-family: Helvetica, Arial, sans-serif;">3005</text>
                                                    </g>
                                                    <g id="SvgjsG1535" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1556" width="35.22148513793945"
                                                            height="15.600000381469727" x="818.53076171875"
                                                            y="35.174739837646484" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1537"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="835.880801296234" y="47.374739818692234"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="835.880801296234"
                                                            cy="47.374739818692234"
                                                            style="font-family: Helvetica, Arial, sans-serif;">3860</text>
                                                    </g>
                                                    <g id="SvgjsG1538" class="apexcharts-data-labels">
                                                        <rect id="SvgjsRect1557" width="35.22148513793945"
                                                            height="15.600000381469727" x="911.4064331054688"
                                                            y="26.534229278564453" rx="2" ry="2"
                                                            opacity="0.9" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" fill="#066ac9"></rect><text
                                                            id="SvgjsText1540"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="928.7564458847046" y="38.734230853217866"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#fff"
                                                            class="apexcharts-datalabel" cx="928.7564458847046"
                                                            cy="38.734230853217866"
                                                            style="font-family: Helvetica, Arial, sans-serif;">4039</text>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1621" x1="0" y1="0"
                                                x2="928.7564458847046" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1622" x1="0" y1="0"
                                                x2="928.7564458847046" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1623" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1624" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1625" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1627" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1628" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect1501" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                        <g id="SvgjsG1593" class="apexcharts-yaxis" rel="0"
                                            transform="translate(21.930273056030273, 0)">
                                            <g id="SvgjsG1594" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText1595" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="31.6" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1596">4800</tspan>
                                                    <title>4800</title>
                                                </text><text id="SvgjsText1597"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="70.2167998456955" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1598">4000</tspan>
                                                    <title>4000</title>
                                                </text><text id="SvgjsText1599"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="108.83359969139102" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1600">3200</tspan>
                                                    <title>3200</title>
                                                </text><text id="SvgjsText1601"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="147.45039953708653" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1602">2400</tspan>
                                                    <title>2400</title>
                                                </text><text id="SvgjsText1603"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="186.06719938278204" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1604">1600</tspan>
                                                    <title>1600</title>
                                                </text><text id="SvgjsText1605"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="224.68399922847755" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1606">800</tspan>
                                                    <title>800</title>
                                                </text><text id="SvgjsText1607"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="263.3007990741731" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1608">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1498" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(6, 106, 201);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 1054px; height: 461px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart END --> --}}

                <!-- Course List table START -->
                <div class="row">
                    <div class="col-12">
                        <div class="card border bg-transparent rounded-3 mt-5">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <h3 class="mb-2 mb-sm-0">Most Selling Courses</h3>
                                    <a href="#" class="btn btn-sm btn-purple-soft mb-0">Lihat Semua</a>
                                </div>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">
                                <div class="table-responsive border-0 rounded-3">
                                    <!-- Table START -->
                                    <table class="table table-dark-gray align-middle p-4 mb-0">
                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Course Name</th>
                                                <th scope="col" class="border-0">Selling</th>
                                                <th scope="col" class="border-0">Amount</th>
                                                <th scope="col" class="border-0">Period</th>
                                                <th scope="col" class="border-0 rounded-end">Action</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body START -->
                                        <tbody>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-60px">
                                                            <img src="https://placehold.it/250x200"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <!-- Title -->
                                                        <h6 class="mb-0 ms-2 table-responsive-title">
                                                            <a href="#">Building Scalable APIs with GraphQL</a>
                                                        </h6>
                                                    </div>
                                                </td>
                                                <!-- Selling item -->
                                                <td>34</td>
                                                <!-- Amount item -->
                                                <td>$1,25,478</td>
                                                <!-- Period item -->
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary">9
                                                        months</span>
                                                </td>
                                                <!-- Action item -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                                            class="far fa-fw fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-60px">
                                                            <img src="https://placehold.it/250x200"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <!-- Title -->
                                                        <h6 class="mb-0 ms-2 table-responsive-title">
                                                            <a href="#">Bootstrap 5 From Scratch</a>
                                                        </h6>
                                                    </div>
                                                </td>
                                                <!-- Selling item -->
                                                <td>45</td>
                                                <!-- Amount item -->
                                                <td>$2,85,478</td>
                                                <!-- Period item -->
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary">6
                                                        months</span>
                                                </td>
                                                <!-- Action item -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                                            class="far fa-fw fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-60px">
                                                            <img src="https://placehold.it/250x200"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <!-- Title -->
                                                        <h6 class="mb-0 ms-2 table-responsive-title">
                                                            <a href="#">Graphic Design Masterclass</a>
                                                        </h6>
                                                    </div>
                                                </td>
                                                <!-- Selling item -->
                                                <td>21</td>
                                                <!-- Amount item -->
                                                <td>$85,478</td>
                                                <!-- Period item -->
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary">4
                                                        months</span>
                                                </td>
                                                <!-- Action item -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                                            class="far fa-fw fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-60px">
                                                            <img src="https://placehold.it/250x200"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <!-- Title -->
                                                        <h6 class="mb-0 ms-2 table-responsive-title">
                                                            <a href="#">Learn Invision</a>
                                                        </h6>
                                                    </div>
                                                </td>
                                                <!-- Selling item -->
                                                <td>28</td>
                                                <!-- Amount item -->
                                                <td>$98,478</td>
                                                <!-- Period item -->
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary">8
                                                        months</span>
                                                </td>
                                                <!-- Action item -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                                            class="far fa-fw fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-60px">
                                                            <img src="https://placehold.it/250x200"
                                                                class="rounded" alt="">
                                                        </div>
                                                        <!-- Title -->
                                                        <h6 class="mb-0 ms-2 table-responsive-title">
                                                            <a href="#">Angular – The Complete Guider</a>
                                                        </h6>
                                                    </div>
                                                </td>
                                                <!-- Selling item -->
                                                <td>38</td>
                                                <!-- Amount item -->
                                                <td>$1,02,478</td>
                                                <!-- Period item -->
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary">1
                                                        year</span>
                                                </td>
                                                <!-- Action item -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i
                                                            class="far fa-fw fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                    <!-- Table END -->
                                </div>

                                <!-- Pagination -->
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-3">
                                    <!-- Content -->
                                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                    <!-- Pagination -->
                                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                        <ul
                                            class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                            <li class="page-item mb-0"><a class="page-link" href="#"
                                                    tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                            <li class="page-item mb-0"><a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item mb-0 active"><a class="page-link"
                                                    href="#">2</a></li>
                                            <li class="page-item mb-0"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                                        class="fas fa-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Card body START -->
                        </div>
                    </div>
                </div>
                <!-- Course List table END -->
            </div>
        </div><!-- Row END -->
    </div>
</section>
