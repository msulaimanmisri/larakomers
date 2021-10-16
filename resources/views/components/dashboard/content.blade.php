<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                <span class="input-group-text input-group-addon bg-transparent border-primary"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-calendar  text-primary">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg></span>
                <input type="text" class="form-control border-primary bg-transparent">
            </div>
            <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-printer btn-icon-prepend">
                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                    <rect x="6" y="14" width="12" height="8"></rect>
                </svg>
                Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-download-cloud btn-icon-prepend">
                    <polyline points="8 17 12 21 16 17"></polyline>
                    <line x1="12" y1="12" x2="12" y2="21"></line>
                    <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                </svg>
                Download Report
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Customers</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg> <span class="">View</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg> <span class="">Edit</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash icon-sm me-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg> <span class="">Delete</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-printer icon-sm me-2">
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                </path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg> <span class="">Print</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-download icon-sm me-2">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg> <span class="">Download</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-up icon-sm mb-1">
                                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                                <polyline points="5 12 12 5 19 12"></polyline>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7" style="position: relative;">
                                    <div id="customersChart" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                        <div id="apexcharts9mpsbm26"
                                            class="apexcharts-canvas apexcharts9mpsbm26 apexcharts-theme-light"
                                            style="width: 192px; height: 60px;"><svg id="SvgjsSvg2001" width="192"
                                                height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG2003" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs2002">
                                                        <clipPath id="gridRectMask9mpsbm26">
                                                            <rect id="SvgjsRect2022" width="198" height="62" x="-3"
                                                                y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask9mpsbm26"></clipPath>
                                                        <clipPath id="nonForecastMask9mpsbm26"></clipPath>
                                                        <clipPath id="gridRectMarkerMask9mpsbm26">
                                                            <rect id="SvgjsRect2023" width="196" height="64" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine2010" x1="0" y1="0" x2="0" y2="60"
                                                        stroke="#b6b6b6" stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60"
                                                        fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG2029" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2030" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2036" class="apexcharts-grid">
                                                        <g id="SvgjsG2037" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine2039" x1="0" y1="0" x2="192" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2040" x1="0" y1="10" x2="192" y2="10"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2041" x1="0" y1="20" x2="192" y2="20"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2042" x1="0" y1="30" x2="192" y2="30"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2043" x1="0" y1="40" x2="192" y2="40"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2044" x1="0" y1="50" x2="192" y2="50"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2045" x1="0" y1="60" x2="192" y2="60"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2038" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine2047" x1="0" y1="60" x2="192" y2="60"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine2046" x1="0" y1="1" x2="0" y2="60"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG2024"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG2025" class="apexcharts-series" seriesName=""
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2028"
                                                                d="M 0 26C 6.72 26 12.48 15 19.2 15C 25.919999999999998 15 31.68 29 38.4 29C 45.12 29 50.88 3 57.6 3C 64.32 3 70.08 48 76.8 48C 83.52 48 89.28 27 96 27C 102.72 27 108.48 49 115.2 49C 121.92 49 127.68 29 134.4 29C 141.12 29 146.88 14 153.6 14C 160.32 14 166.08 43 172.8 43C 179.52 43 185.28 27 192 27"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(101,113,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                clip-path="url(#gridRectMask9mpsbm26)"
                                                                pathTo="M 0 26C 6.72 26 12.48 15 19.2 15C 25.919999999999998 15 31.68 29 38.4 29C 45.12 29 50.88 3 57.6 3C 64.32 3 70.08 48 76.8 48C 83.52 48 89.28 27 96 27C 102.72 27 108.48 49 115.2 49C 121.92 49 127.68 29 134.4 29C 141.12 29 146.88 14 153.6 14C 160.32 14 166.08 43 172.8 43C 179.52 43 185.28 27 192 27"
                                                                pathFrom="M -1 3870L -1 3870L 19.2 3870L 38.4 3870L 57.6 3870L 76.8 3870L 96 3870L 115.2 3870L 134.4 3870L 153.6 3870L 172.8 3870L 192 3870">
                                                            </path>
                                                            <g id="SvgjsG2026" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle2053" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker w9njf8ud no-pointer-events"
                                                                        stroke="#ffffff" fill="#6571ff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2027" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine2048" x1="0" y1="0" x2="192" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2049" x1="0" y1="0" x2="192" y2="0"
                                                        stroke-dasharray="0" stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2050" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2051" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2052" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect2009" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG2035" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2004" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(101, 113, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 217px; height: 77px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Orders</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg> <span class="">View</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg> <span class="">Edit</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash icon-sm me-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg> <span class="">Delete</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-printer icon-sm me-2">
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                </path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg> <span class="">Print</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-download icon-sm me-2">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg> <span class="">Download</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">35,084</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-danger">
                                            <span>-2.8%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-down icon-sm mb-1">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <polyline points="19 12 12 19 5 12"></polyline>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7" style="position: relative;">
                                    <div id="ordersChart" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                        <div id="apexchartsvq58mghw"
                                            class="apexcharts-canvas apexchartsvq58mghw apexcharts-theme-light"
                                            style="width: 192px; height: 60px;"><svg id="SvgjsSvg2054" width="192"
                                                height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG2056" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(16.68, 0)">
                                                    <defs id="SvgjsDefs2055">
                                                        <linearGradient id="SvgjsLinearGradient2062" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop2063" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop2064" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop2065" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskvq58mghw">
                                                            <rect id="SvgjsRect2078" width="196" height="60" x="-14.68"
                                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskvq58mghw"></clipPath>
                                                        <clipPath id="nonForecastMaskvq58mghw"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskvq58mghw">
                                                            <rect id="SvgjsRect2079" width="170.64" height="64" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect2066" width="9.998399999999998" height="60" x="0"
                                                        y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient2062)"
                                                        class="apexcharts-xcrosshairs" y2="60" filter="none"
                                                        fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG2106" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2107" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2112" class="apexcharts-grid">
                                                        <g id="SvgjsG2113" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine2115" x1="-12.68" y1="0" x2="179.32"
                                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2116" x1="-12.68" y1="12" x2="179.32"
                                                                y2="12" stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2117" x1="-12.68" y1="24" x2="179.32"
                                                                y2="24" stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2118" x1="-12.68" y1="36" x2="179.32"
                                                                y2="36" stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2119" x1="-12.68" y1="48" x2="179.32"
                                                                y2="48" stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2120" x1="-12.68" y1="60" x2="179.32"
                                                                y2="60" stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2114" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine2122" x1="0" y1="60" x2="166.64" y2="60"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine2121" x1="0" y1="1" x2="0" y2="60"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG2080"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG2081" class="apexcharts-series" rel="1"
                                                            seriesName="" data:realIndex="0">
                                                            <path id="SvgjsPath2085"
                                                                d="M -4.999199999999999 60L -4.999199999999999 40.400000000000006Q -4.999199999999999 38.400000000000006 -2.999199999999999 38.400000000000006L 2.999199999999999 38.400000000000006Q 4.999199999999999 38.400000000000006 4.999199999999999 40.400000000000006L 4.999199999999999 40.400000000000006L 4.999199999999999 60L 4.999199999999999 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M -4.999199999999999 60L -4.999199999999999 40.400000000000006Q -4.999199999999999 38.400000000000006 -2.999199999999999 38.400000000000006L 2.999199999999999 38.400000000000006Q 4.999199999999999 38.400000000000006 4.999199999999999 40.400000000000006L 4.999199999999999 40.400000000000006L 4.999199999999999 60L 4.999199999999999 60z"
                                                                pathFrom="M -4.999199999999999 60L -4.999199999999999 60L 4.999199999999999 60L 4.999199999999999 60L 4.999199999999999 60L 4.999199999999999 60L 4.999199999999999 60L -4.999199999999999 60"
                                                                cy="38.400000000000006" cx="4.999199999999999" j="0"
                                                                val="36" barHeight="21.599999999999998"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2087"
                                                                d="M 11.6648 60L 11.6648 15.800000000000004Q 11.6648 13.800000000000004 13.6648 13.800000000000004L 19.663199999999996 13.800000000000004Q 21.663199999999996 13.800000000000004 21.663199999999996 15.800000000000004L 21.663199999999996 15.800000000000004L 21.663199999999996 60L 21.663199999999996 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 11.6648 60L 11.6648 15.800000000000004Q 11.6648 13.800000000000004 13.6648 13.800000000000004L 19.663199999999996 13.800000000000004Q 21.663199999999996 13.800000000000004 21.663199999999996 15.800000000000004L 21.663199999999996 15.800000000000004L 21.663199999999996 60L 21.663199999999996 60z"
                                                                pathFrom="M 11.6648 60L 11.6648 60L 21.663199999999996 60L 21.663199999999996 60L 21.663199999999996 60L 21.663199999999996 60L 21.663199999999996 60L 11.6648 60"
                                                                cy="13.800000000000004" cx="21.663199999999996" j="1"
                                                                val="77" barHeight="46.199999999999996"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2089"
                                                                d="M 28.328799999999998 60L 28.328799999999998 30.8Q 28.328799999999998 28.8 30.328799999999998 28.8L 36.3272 28.8Q 38.3272 28.8 38.3272 30.8L 38.3272 30.8L 38.3272 60L 38.3272 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 28.328799999999998 60L 28.328799999999998 30.8Q 28.328799999999998 28.8 30.328799999999998 28.8L 36.3272 28.8Q 38.3272 28.8 38.3272 30.8L 38.3272 30.8L 38.3272 60L 38.3272 60z"
                                                                pathFrom="M 28.328799999999998 60L 28.328799999999998 60L 38.3272 60L 38.3272 60L 38.3272 60L 38.3272 60L 38.3272 60L 28.328799999999998 60"
                                                                cy="28.8" cx="38.3272" j="2" val="52" barHeight="31.2"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2091"
                                                                d="M 44.992799999999995 60L 44.992799999999995 8Q 44.992799999999995 6 46.992799999999995 6L 52.99119999999999 6Q 54.99119999999999 6 54.99119999999999 8L 54.99119999999999 8L 54.99119999999999 60L 54.99119999999999 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 44.992799999999995 60L 44.992799999999995 8Q 44.992799999999995 6 46.992799999999995 6L 52.99119999999999 6Q 54.99119999999999 6 54.99119999999999 8L 54.99119999999999 8L 54.99119999999999 60L 54.99119999999999 60z"
                                                                pathFrom="M 44.992799999999995 60L 44.992799999999995 60L 54.99119999999999 60L 54.99119999999999 60L 54.99119999999999 60L 54.99119999999999 60L 54.99119999999999 60L 44.992799999999995 60"
                                                                cy="6" cx="54.99119999999999" j="3" val="90"
                                                                barHeight="54" barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2093"
                                                                d="M 61.65679999999999 60L 61.65679999999999 17.6Q 61.65679999999999 15.600000000000001 63.65679999999999 15.600000000000001L 69.6552 15.600000000000001Q 71.6552 15.600000000000001 71.6552 17.6L 71.6552 17.6L 71.6552 60L 71.6552 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 61.65679999999999 60L 61.65679999999999 17.6Q 61.65679999999999 15.600000000000001 63.65679999999999 15.600000000000001L 69.6552 15.600000000000001Q 71.6552 15.600000000000001 71.6552 17.6L 71.6552 17.6L 71.6552 60L 71.6552 60z"
                                                                pathFrom="M 61.65679999999999 60L 61.65679999999999 60L 71.6552 60L 71.6552 60L 71.6552 60L 71.6552 60L 71.6552 60L 61.65679999999999 60"
                                                                cy="15.600000000000001" cx="71.6552" j="4" val="74"
                                                                barHeight="44.4" barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2095"
                                                                d="M 78.32079999999999 60L 78.32079999999999 41Q 78.32079999999999 39 80.32079999999999 39L 86.3192 39Q 88.3192 39 88.3192 41L 88.3192 41L 88.3192 60L 88.3192 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 78.32079999999999 60L 78.32079999999999 41Q 78.32079999999999 39 80.32079999999999 39L 86.3192 39Q 88.3192 39 88.3192 41L 88.3192 41L 88.3192 60L 88.3192 60z"
                                                                pathFrom="M 78.32079999999999 60L 78.32079999999999 60L 88.3192 60L 88.3192 60L 88.3192 60L 88.3192 60L 88.3192 60L 78.32079999999999 60"
                                                                cy="39" cx="88.3192" j="5" val="35" barHeight="21"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2097"
                                                                d="M 94.98479999999999 60L 94.98479999999999 29Q 94.98479999999999 27 96.98479999999999 27L 102.9832 27Q 104.9832 27 104.9832 29L 104.9832 29L 104.9832 60L 104.9832 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 94.98479999999999 60L 94.98479999999999 29Q 94.98479999999999 27 96.98479999999999 27L 102.9832 27Q 104.9832 27 104.9832 29L 104.9832 29L 104.9832 60L 104.9832 60z"
                                                                pathFrom="M 94.98479999999999 60L 94.98479999999999 60L 104.9832 60L 104.9832 60L 104.9832 60L 104.9832 60L 104.9832 60L 94.98479999999999 60"
                                                                cy="27" cx="104.9832" j="6" val="55" barHeight="33"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2099"
                                                                d="M 111.6488 60L 111.6488 48.2Q 111.6488 46.2 113.6488 46.2L 119.6472 46.2Q 121.6472 46.2 121.6472 48.2L 121.6472 48.2L 121.6472 60L 121.6472 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 111.6488 60L 111.6488 48.2Q 111.6488 46.2 113.6488 46.2L 119.6472 46.2Q 121.6472 46.2 121.6472 48.2L 121.6472 48.2L 121.6472 60L 121.6472 60z"
                                                                pathFrom="M 111.6488 60L 111.6488 60L 121.6472 60L 121.6472 60L 121.6472 60L 121.6472 60L 121.6472 60L 111.6488 60"
                                                                cy="46.2" cx="121.6472" j="7" val="23"
                                                                barHeight="13.799999999999999"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2101"
                                                                d="M 128.31279999999998 60L 128.31279999999998 33.8Q 128.31279999999998 31.799999999999997 130.31279999999998 31.799999999999997L 136.31119999999999 31.799999999999997Q 138.31119999999999 31.799999999999997 138.31119999999999 33.8L 138.31119999999999 33.8L 138.31119999999999 60L 138.31119999999999 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 128.31279999999998 60L 128.31279999999998 33.8Q 128.31279999999998 31.799999999999997 130.31279999999998 31.799999999999997L 136.31119999999999 31.799999999999997Q 138.31119999999999 31.799999999999997 138.31119999999999 33.8L 138.31119999999999 33.8L 138.31119999999999 60L 138.31119999999999 60z"
                                                                pathFrom="M 128.31279999999998 60L 128.31279999999998 60L 138.31119999999999 60L 138.31119999999999 60L 138.31119999999999 60L 138.31119999999999 60L 138.31119999999999 60L 128.31279999999998 60"
                                                                cy="31.8" cx="138.31119999999999" j="8" val="47"
                                                                barHeight="28.2" barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2103"
                                                                d="M 144.9768 60L 144.9768 56Q 144.9768 54 146.9768 54L 152.9752 54Q 154.9752 54 154.9752 56L 154.9752 56L 154.9752 60L 154.9752 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 144.9768 60L 144.9768 56Q 144.9768 54 146.9768 54L 152.9752 54Q 154.9752 54 154.9752 56L 154.9752 56L 154.9752 60L 154.9752 60z"
                                                                pathFrom="M 144.9768 60L 144.9768 60L 154.9752 60L 154.9752 60L 154.9752 60L 154.9752 60L 154.9752 60L 144.9768 60"
                                                                cy="54" cx="154.9752" j="9" val="10" barHeight="6"
                                                                barWidth="9.998399999999998"></path>
                                                            <path id="SvgjsPath2105"
                                                                d="M 161.64079999999998 60L 161.64079999999998 24.200000000000003Q 161.64079999999998 22.200000000000003 163.64079999999998 22.200000000000003L 169.6392 22.200000000000003Q 171.6392 22.200000000000003 171.6392 24.200000000000003L 171.6392 24.200000000000003L 171.6392 60L 171.6392 60z"
                                                                fill="rgba(101,113,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskvq58mghw)"
                                                                pathTo="M 161.64079999999998 60L 161.64079999999998 24.200000000000003Q 161.64079999999998 22.200000000000003 163.64079999999998 22.200000000000003L 169.6392 22.200000000000003Q 171.6392 22.200000000000003 171.6392 24.200000000000003L 171.6392 24.200000000000003L 171.6392 60L 171.6392 60z"
                                                                pathFrom="M 161.64079999999998 60L 161.64079999999998 60L 171.6392 60L 171.6392 60L 171.6392 60L 171.6392 60L 171.6392 60L 161.64079999999998 60"
                                                                cy="22.200000000000003" cx="171.6392" j="10" val="63"
                                                                barHeight="37.8" barWidth="9.998399999999998"></path>
                                                            <g id="SvgjsG2083" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG2084"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2086"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2088"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2090"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2092"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2094"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2096"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2098"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2100"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2102"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2104"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2082" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine2123" x1="-12.68" y1="0" x2="179.32" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2124" x1="-12.68" y1="0" x2="179.32" y2="0"
                                                        stroke-dasharray="0" stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2125" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2126" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2127" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG2111" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2057" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(101, 113, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 217px; height: 77px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Growth</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg> <span class="">View</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg> <span class="">Edit</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash icon-sm me-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg> <span class="">Delete</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-printer icon-sm me-2">
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                </path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg> <span class="">Print</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-download icon-sm me-2">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg> <span class="">Download</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">89.87%</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+2.8%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-up icon-sm mb-1">
                                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                                <polyline points="5 12 12 5 19 12"></polyline>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7" style="position: relative;">
                                    <div id="growthChart" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                        <div id="apexchartsx1wo2y7o"
                                            class="apexcharts-canvas apexchartsx1wo2y7o apexcharts-theme-light"
                                            style="width: 192px; height: 60px;"><svg id="SvgjsSvg2129" width="192"
                                                height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG2131" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs2130">
                                                        <clipPath id="gridRectMaskx1wo2y7o">
                                                            <rect id="SvgjsRect2150" width="198" height="62" x="-3"
                                                                y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskx1wo2y7o"></clipPath>
                                                        <clipPath id="nonForecastMaskx1wo2y7o"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskx1wo2y7o">
                                                            <rect id="SvgjsRect2151" width="196" height="64" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine2138" x1="0" y1="0" x2="0" y2="60"
                                                        stroke="#b6b6b6" stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60"
                                                        fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG2157" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2158" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2164" class="apexcharts-grid">
                                                        <g id="SvgjsG2165" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine2167" x1="0" y1="0" x2="192" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2168" x1="0" y1="8.571428571428571"
                                                                x2="192" y2="8.571428571428571" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2169" x1="0" y1="17.142857142857142"
                                                                x2="192" y2="17.142857142857142" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2170" x1="0" y1="25.714285714285715"
                                                                x2="192" y2="25.714285714285715" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2171" x1="0" y1="34.285714285714285"
                                                                x2="192" y2="34.285714285714285" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2172" x1="0" y1="42.857142857142854"
                                                                x2="192" y2="42.857142857142854" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2173" x1="0" y1="51.42857142857142"
                                                                x2="192" y2="51.42857142857142" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2174" x1="0" y1="59.99999999999999"
                                                                x2="192" y2="59.99999999999999" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2166" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine2176" x1="0" y1="60" x2="192" y2="60"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine2175" x1="0" y1="1" x2="0" y2="60"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG2152"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG2153" class="apexcharts-series" seriesName=""
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2156"
                                                                d="M 0 50.57142857142857C 6.72 50.57142857142857 12.48 47.14285714285714 19.2 47.14285714285714C 25.919999999999998 47.14285714285714 31.68 47.99999999999999 38.4 47.99999999999999C 45.12 47.99999999999999 50.88 46.285714285714285 57.6 46.285714285714285C 64.32 46.285714285714285 70.08 41.14285714285714 76.8 41.14285714285714C 83.52 41.14285714285714 89.28 39.42857142857142 96 39.42857142857142C 102.72 39.42857142857142 108.48 48.857142857142854 115.2 48.857142857142854C 121.92 48.857142857142854 127.68 22.285714285714285 134.4 22.285714285714285C 141.12 22.285714285714285 146.88 15.42857142857143 153.6 15.42857142857143C 160.32 15.42857142857143 166.08 15.42857142857143 172.8 15.42857142857143C 179.52 15.42857142857143 185.28 9.42857142857143 192 9.42857142857143"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(101,113,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                clip-path="url(#gridRectMaskx1wo2y7o)"
                                                                pathTo="M 0 50.57142857142857C 6.72 50.57142857142857 12.48 47.14285714285714 19.2 47.14285714285714C 25.919999999999998 47.14285714285714 31.68 47.99999999999999 38.4 47.99999999999999C 45.12 47.99999999999999 50.88 46.285714285714285 57.6 46.285714285714285C 64.32 46.285714285714285 70.08 41.14285714285714 76.8 41.14285714285714C 83.52 41.14285714285714 89.28 39.42857142857142 96 39.42857142857142C 102.72 39.42857142857142 108.48 48.857142857142854 115.2 48.857142857142854C 121.92 48.857142857142854 127.68 22.285714285714285 134.4 22.285714285714285C 141.12 22.285714285714285 146.88 15.42857142857143 153.6 15.42857142857143C 160.32 15.42857142857143 166.08 15.42857142857143 172.8 15.42857142857143C 179.52 15.42857142857143 185.28 9.42857142857143 192 9.42857142857143"
                                                                pathFrom="M -1 85.71428571428571L -1 85.71428571428571L 19.2 85.71428571428571L 38.4 85.71428571428571L 57.6 85.71428571428571L 76.8 85.71428571428571L 96 85.71428571428571L 115.2 85.71428571428571L 134.4 85.71428571428571L 153.6 85.71428571428571L 172.8 85.71428571428571L 192 85.71428571428571">
                                                            </path>
                                                            <g id="SvgjsG2154" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle2182" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker w8xu0kfwh no-pointer-events"
                                                                        stroke="#ffffff" fill="#6571ff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2155" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine2177" x1="0" y1="0" x2="192" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2178" x1="0" y1="0" x2="192" y2="0"
                                                        stroke-dasharray="0" stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2179" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2180" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2181" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect2137" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG2163" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2132" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(101, 113, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 217px; height: 77px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <div class="card-body" style="position: relative;">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                        <h6 class="card-title mb-0">Revenue</h6>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye icon-sm me-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-trash icon-sm me-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                    </svg> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-printer icon-sm me-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                        </path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-download icon-sm me-2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg> <span class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-md-7">
                            <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its
                                normal business activities, usually from the sale of goods and services to customers.
                            </p>
                        </div>
                        <div class="col-md-5 d-flex justify-content-md-end">
                            <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-primary">Today</button>
                                <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                                <button type="button" class="btn btn-primary">Month</button>
                                <button type="button" class="btn btn-outline-primary">Year</button>
                            </div>
                        </div>
                    </div>
                    <div id="revenueChart" style="min-height: 400px;">
                        <div id="apexchartscbjww1t2" class="apexcharts-canvas apexchartscbjww1t2 apexcharts-theme-light"
                            style="width: 723px; height: 400px;"><svg id="SvgjsSvg2184" width="723" height="400"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: rgb(255, 255, 255);">
                                <g id="SvgjsG2186" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(61.828125, 30)">
                                    <defs id="SvgjsDefs2185">
                                        <clipPath id="gridRectMaskcbjww1t2">
                                            <rect id="SvgjsRect2206" width="657.171875" height="344.66875" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskcbjww1t2"></clipPath>
                                        <clipPath id="nonForecastMaskcbjww1t2"></clipPath>
                                        <clipPath id="gridRectMarkerMaskcbjww1t2">
                                            <rect id="SvgjsRect2207" width="655.171875" height="346.66875" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine2193" x1="0" y1="0" x2="0" y2="342.66875" stroke="#7987a1"
                                        stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="342.66875" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG2213" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2214" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText2216"
                                                font-family="Helvetica, Arial, sans-serif" x="1.456760346756152"
                                                y="371.66875" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="600" fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2217">Jan '21</tspan>
                                                <title>Jan '21</title>
                                            </text><text id="SvgjsText2219" font-family="Helvetica, Arial, sans-serif"
                                                x="62.64069491051456" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2220">15 Jan</tspan>
                                                <title>15 Jan</title>
                                            </text><text id="SvgjsText2222" font-family="Helvetica, Arial, sans-serif"
                                                x="136.93547259507827" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="600"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2223">Feb '21</tspan>
                                                <title>Feb '21</title>
                                            </text><text id="SvgjsText2225" font-family="Helvetica, Arial, sans-serif"
                                                x="198.1194071588366" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2226">15 Feb</tspan>
                                                <title>15 Feb</title>
                                            </text><text id="SvgjsText2228" font-family="Helvetica, Arial, sans-serif"
                                                x="259.30334172259495" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="600"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2229">Mar '21</tspan>
                                                <title>Mar '21</title>
                                            </text><text id="SvgjsText2231" font-family="Helvetica, Arial, sans-serif"
                                                x="320.4872762863537" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2232">15 Mar</tspan>
                                                <title>15 Mar</title>
                                            </text><text id="SvgjsText2234" font-family="Helvetica, Arial, sans-serif"
                                                x="394.78205397091784" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="600"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2235">Apr '21</tspan>
                                                <title>Apr '21</title>
                                            </text><text id="SvgjsText2237" font-family="Helvetica, Arial, sans-serif"
                                                x="455.96598853467657" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2238">15 Apr</tspan>
                                                <title>15 Apr</title>
                                            </text><text id="SvgjsText2240" font-family="Helvetica, Arial, sans-serif"
                                                x="525.8904851789721" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="600"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2241">May '21</tspan>
                                                <title>May '21</title>
                                            </text><text id="SvgjsText2243" font-family="Helvetica, Arial, sans-serif"
                                                x="587.07441974273" y="371.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2244">15 May</tspan>
                                                <title>15 May</title>
                                            </text></g>
                                        <line id="SvgjsLine2245" x1="0" y1="343.66875" x2="651.171875" y2="343.66875"
                                            stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-width="1">
                                        </line>
                                    </g>
                                    <g id="SvgjsG2260" class="apexcharts-grid">
                                        <g id="SvgjsG2261" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine2283" x1="0" y1="0" x2="651.171875" y2="0"
                                                stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2284" x1="0" y1="85.6671875" x2="651.171875"
                                                y2="85.6671875" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2285" x1="0" y1="171.334375" x2="651.171875"
                                                y2="171.334375" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2286" x1="0" y1="257.0015625" x2="651.171875"
                                                y2="257.0015625" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2287" x1="0" y1="342.66875" x2="651.171875"
                                                y2="342.66875" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2262" class="apexcharts-gridlines-vertical">
                                            <line id="SvgjsLine2263" x1="1.456760346756152" y1="0"
                                                x2="1.456760346756152" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2265" x1="62.64069491051456" y1="0"
                                                x2="62.64069491051456" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2267" x1="136.93547259507827" y1="0"
                                                x2="136.93547259507827" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2269" x1="198.1194071588366" y1="0"
                                                x2="198.1194071588366" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2271" x1="259.30334172259495" y1="0"
                                                x2="259.30334172259495" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2273" x1="320.4872762863537" y1="0"
                                                x2="320.4872762863537" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2275" x1="394.78205397091784" y1="0"
                                                x2="394.78205397091784" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2277" x1="455.96598853467657" y1="0"
                                                x2="455.96598853467657" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2279" x1="525.8904851789721" y1="0"
                                                x2="525.8904851789721" y2="342.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2281" x1="587.07441974273" y1="0" x2="587.07441974273"
                                                y2="342.66875" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <line id="SvgjsLine2264" x1="1.456760346756152" y1="343.66875"
                                            x2="1.456760346756152" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2266" x1="62.64069491051456" y1="343.66875"
                                            x2="62.64069491051456" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2268" x1="136.93547259507827" y1="343.66875"
                                            x2="136.93547259507827" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2270" x1="198.1194071588366" y1="343.66875"
                                            x2="198.1194071588366" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2272" x1="259.30334172259495" y1="343.66875"
                                            x2="259.30334172259495" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2274" x1="320.4872762863537" y1="343.66875"
                                            x2="320.4872762863537" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2276" x1="394.78205397091784" y1="343.66875"
                                            x2="394.78205397091784" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2278" x1="455.96598853467657" y1="343.66875"
                                            x2="455.96598853467657" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2280" x1="525.8904851789721" y1="343.66875"
                                            x2="525.8904851789721" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2282" x1="587.07441974273" y1="343.66875"
                                            x2="587.07441974273" y2="349.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2289" x1="0" y1="342.66875" x2="651.171875" y2="342.66875"
                                            stroke="transparent" stroke-dasharray="0"></line>
                                        <line id="SvgjsLine2288" x1="0" y1="1" x2="0" y2="342.66875"
                                            stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG2208" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG2209" class="apexcharts-series" seriesName="Revenue"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath2212"
                                                d="M 0 131.37063203125L 4.370281040268456 133.68364609375L 8.740562080536913 125.88793203125002L 13.11084312080537 114.32286171875L 17.481124161073826 108.0263234375L 21.85140520134228 112.05268125L 26.22168624161074 108.454659375L 30.591967281879196 99.6309390625L 34.96224832214765 98.56009921875L 39.33252936241611 102.2009546875L 43.70281040268456 100.40194374999999L 48.07309144295302 84.16801171875L 52.44337248322148 91.0642203125L 56.81365352348993 79.49915000000004L 61.18393456375839 80.91265859375L 65.55421560402685 91.79239140625L 69.9244966442953 108.28332500000002L 74.29477768456375 119.63422734375001L 78.66505872483222 123.83191953124998L 83.03533976510067 139.29484687500002L 87.40562080536913 134.62598515625L 91.77590184563759 132.82697421875L 96.14618288590604 113.16635468750002L 100.5164639261745 127.301440625L 104.88674496644296 144.6062125L 109.25702600671141 134.45465078125L 113.62730704697987 121.00490234375002L 117.99758808724833 122.7610796875L 122.36786912751678 127.60127578125L 126.73815016778524 108.58316015625002L 131.1084312080537 118.04938437500002L 135.47871224832215 115.39370156249998L 139.8489932885906 98.21743046875L 144.21927432885906 115.77920390625002L 148.5895553691275 133.98348125L 152.959836409396 116.97854453125001L 157.33011744966444 113.12352109374999L 161.7003984899329 92.006559375L 166.07067953020135 106.65564843749999L 170.4409605704698 94.01973828125003L 174.81124161073825 79.88465234375002L 179.18152265100673 95.3475796875L 183.55180369127518 84.51068046875002L 187.92208473154363 81.38382812500004L 192.2923657718121 95.17624531250001L 196.66264681208054 99.37393750000001L 201.032927852349 90.37888281250002L 205.40320889261744 75.17295703125001L 209.77348993288592 91.02138671875002L 214.14377097315437 92.52056250000001L 218.51405201342283 99.6309390625L 222.88433305369128 116.67870937500001L 227.25461409395973 118.64905468750001L 231.62489513422818 126.10210000000001L 235.99517617449666 105.37064062500002L 240.36545721476512 126.40193515625L 244.73573825503357 117.83521640625L 249.10601929530202 133.68364609375L 253.47630033557047 139.3805140625L 257.8465813758389 157.15645546874998L 262.2168624161074 175.78906875L 266.5871434563758 193.90767890625003L 270.9574244966443 209.75610859374999L 275.3277055369128 202.90273359374999L 279.6979865771812 184.65562265625L 284.0682676174497 188.93898203125L 288.4385486577181 202.4315640625L 292.8088296979866 200.46121875L 297.179110738255 210.6556140625L 301.5493917785235 219.9933375L 305.919672818792 220.850009375L 310.2899538590604 223.89119453125L 314.6602348993289 223.80552734375L 319.0305159395973 231.472740625L 323.4007969798658 238.2404484375L 327.7710780201342 248.64901171875L 332.1413590604027 248.092175L 336.5116401006712 241.83847031250002L 340.8819211409396 225.73303906249998L 345.2522021812081 213.01146171875L 349.6224832214765 225.94720703125L 353.992764261745 214.5106375L 358.36304530201346 234.9850953125L 362.7333263422819 243.76598203125002L 367.10360738255036 240.76763046874999L 371.4738884228188 242.1811390625L 375.84416946308727 222.77752109375L 380.2144505033557 243.25197890624997L 384.5847315436242 240.25362734375L 388.95501258389265 260.38541640625L 393.3252936241611 277.86152265625L 397.69557466442956 278.075690625L 402.065855704698 295.551796875L 406.43613674496646 303.26184375L 410.8064177852349 310.67205546875L 415.17669882550337 292.81044687499997L 419.54697986577185 275.16300624999997L 423.91726090604027 282.74455234375L 428.28754194630875 288.74125546875L 432.6578229865772 284.71489765625L 437.02810402684565 278.37552578124996L 441.39838506711413 282.91588671875L 445.76866610738256 285.99990546875L 450.13894714765104 265.1399453125L 454.50922818791946 254.30304609375L 458.87950922818794 252.4612015625L 463.24979026845637 233.99992265625L 467.62007130872485 234.21409062499998L 471.9903523489933 252.9752046875L 476.36063338926175 262.35576171875L 480.73091442953023 276.7906828125L 485.10119546979865 280.3030375L 489.47147651006713 265.8252828125L 493.84175755033556 274.306334375L 498.21203859060404 272.63582421875L 502.5823196308725 282.01638125L 506.95260067114094 290.84010156249997L 511.3228817114094 279.10369687499997L 515.6931627516778 268.823634375L 520.0634437919463 266.46778671875L 524.4337248322148 282.57321796875L 528.8040058724832 262.78409765624997L 533.1742869127517 263.5979359375L 537.5445679530202 245.522159375L 541.9148489932886 235.24209687500002L 546.285130033557 221.9636828125L 550.6554110738256 222.60618671875L 555.025692114094 239.39695546874998L 559.3959731543624 238.66878437499997L 563.7662541946308 221.74951484374998L 568.1365352348994 230.2734L 572.5068162751678 217.03781953125002L 576.8770973154362 231.00157109375L 581.2473783557048 240.21079375L 585.6176593959732 219.22233281249999L 589.9879404362416 234.9850953125L 594.35822147651 249.33434921875L 598.7285025167786 243.93731640624998L 603.098783557047 253.96037734375L 607.4690645973154 215.367309375L 611.839345637584 213.26846328125L 616.2096266778524 203.20256874999998L 620.5799077181208 207.9142640625L 624.9501887583892 198.36237265625002L 629.3204697986578 213.95380078125L 633.6907508389262 196.177859375L 638.0610318791946 184.48428828125L 642.4313129194632 190.6094921875L 646.8015939597316 193.6935109375L 651.171875 184.31295390625002"
                                                fill="none" fill-opacity="1" stroke="rgba(101,113,255,0.85)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                clip-path="url(#gridRectMaskcbjww1t2)"
                                                pathTo="M 0 131.37063203125L 4.370281040268456 133.68364609375L 8.740562080536913 125.88793203125002L 13.11084312080537 114.32286171875L 17.481124161073826 108.0263234375L 21.85140520134228 112.05268125L 26.22168624161074 108.454659375L 30.591967281879196 99.6309390625L 34.96224832214765 98.56009921875L 39.33252936241611 102.2009546875L 43.70281040268456 100.40194374999999L 48.07309144295302 84.16801171875L 52.44337248322148 91.0642203125L 56.81365352348993 79.49915000000004L 61.18393456375839 80.91265859375L 65.55421560402685 91.79239140625L 69.9244966442953 108.28332500000002L 74.29477768456375 119.63422734375001L 78.66505872483222 123.83191953124998L 83.03533976510067 139.29484687500002L 87.40562080536913 134.62598515625L 91.77590184563759 132.82697421875L 96.14618288590604 113.16635468750002L 100.5164639261745 127.301440625L 104.88674496644296 144.6062125L 109.25702600671141 134.45465078125L 113.62730704697987 121.00490234375002L 117.99758808724833 122.7610796875L 122.36786912751678 127.60127578125L 126.73815016778524 108.58316015625002L 131.1084312080537 118.04938437500002L 135.47871224832215 115.39370156249998L 139.8489932885906 98.21743046875L 144.21927432885906 115.77920390625002L 148.5895553691275 133.98348125L 152.959836409396 116.97854453125001L 157.33011744966444 113.12352109374999L 161.7003984899329 92.006559375L 166.07067953020135 106.65564843749999L 170.4409605704698 94.01973828125003L 174.81124161073825 79.88465234375002L 179.18152265100673 95.3475796875L 183.55180369127518 84.51068046875002L 187.92208473154363 81.38382812500004L 192.2923657718121 95.17624531250001L 196.66264681208054 99.37393750000001L 201.032927852349 90.37888281250002L 205.40320889261744 75.17295703125001L 209.77348993288592 91.02138671875002L 214.14377097315437 92.52056250000001L 218.51405201342283 99.6309390625L 222.88433305369128 116.67870937500001L 227.25461409395973 118.64905468750001L 231.62489513422818 126.10210000000001L 235.99517617449666 105.37064062500002L 240.36545721476512 126.40193515625L 244.73573825503357 117.83521640625L 249.10601929530202 133.68364609375L 253.47630033557047 139.3805140625L 257.8465813758389 157.15645546874998L 262.2168624161074 175.78906875L 266.5871434563758 193.90767890625003L 270.9574244966443 209.75610859374999L 275.3277055369128 202.90273359374999L 279.6979865771812 184.65562265625L 284.0682676174497 188.93898203125L 288.4385486577181 202.4315640625L 292.8088296979866 200.46121875L 297.179110738255 210.6556140625L 301.5493917785235 219.9933375L 305.919672818792 220.850009375L 310.2899538590604 223.89119453125L 314.6602348993289 223.80552734375L 319.0305159395973 231.472740625L 323.4007969798658 238.2404484375L 327.7710780201342 248.64901171875L 332.1413590604027 248.092175L 336.5116401006712 241.83847031250002L 340.8819211409396 225.73303906249998L 345.2522021812081 213.01146171875L 349.6224832214765 225.94720703125L 353.992764261745 214.5106375L 358.36304530201346 234.9850953125L 362.7333263422819 243.76598203125002L 367.10360738255036 240.76763046874999L 371.4738884228188 242.1811390625L 375.84416946308727 222.77752109375L 380.2144505033557 243.25197890624997L 384.5847315436242 240.25362734375L 388.95501258389265 260.38541640625L 393.3252936241611 277.86152265625L 397.69557466442956 278.075690625L 402.065855704698 295.551796875L 406.43613674496646 303.26184375L 410.8064177852349 310.67205546875L 415.17669882550337 292.81044687499997L 419.54697986577185 275.16300624999997L 423.91726090604027 282.74455234375L 428.28754194630875 288.74125546875L 432.6578229865772 284.71489765625L 437.02810402684565 278.37552578124996L 441.39838506711413 282.91588671875L 445.76866610738256 285.99990546875L 450.13894714765104 265.1399453125L 454.50922818791946 254.30304609375L 458.87950922818794 252.4612015625L 463.24979026845637 233.99992265625L 467.62007130872485 234.21409062499998L 471.9903523489933 252.9752046875L 476.36063338926175 262.35576171875L 480.73091442953023 276.7906828125L 485.10119546979865 280.3030375L 489.47147651006713 265.8252828125L 493.84175755033556 274.306334375L 498.21203859060404 272.63582421875L 502.5823196308725 282.01638125L 506.95260067114094 290.84010156249997L 511.3228817114094 279.10369687499997L 515.6931627516778 268.823634375L 520.0634437919463 266.46778671875L 524.4337248322148 282.57321796875L 528.8040058724832 262.78409765624997L 533.1742869127517 263.5979359375L 537.5445679530202 245.522159375L 541.9148489932886 235.24209687500002L 546.285130033557 221.9636828125L 550.6554110738256 222.60618671875L 555.025692114094 239.39695546874998L 559.3959731543624 238.66878437499997L 563.7662541946308 221.74951484374998L 568.1365352348994 230.2734L 572.5068162751678 217.03781953125002L 576.8770973154362 231.00157109375L 581.2473783557048 240.21079375L 585.6176593959732 219.22233281249999L 589.9879404362416 234.9850953125L 594.35822147651 249.33434921875L 598.7285025167786 243.93731640624998L 603.098783557047 253.96037734375L 607.4690645973154 215.367309375L 611.839345637584 213.26846328125L 616.2096266778524 203.20256874999998L 620.5799077181208 207.9142640625L 624.9501887583892 198.36237265625002L 629.3204697986578 213.95380078125L 633.6907508389262 196.177859375L 638.0610318791946 184.48428828125L 642.4313129194632 190.6094921875L 646.8015939597316 193.6935109375L 651.171875 184.31295390625002"
                                                pathFrom="M -1 342.66875L -1 342.66875L 4.370281040268456 342.66875L 8.740562080536913 342.66875L 13.11084312080537 342.66875L 17.481124161073826 342.66875L 21.85140520134228 342.66875L 26.22168624161074 342.66875L 30.591967281879196 342.66875L 34.96224832214765 342.66875L 39.33252936241611 342.66875L 43.70281040268456 342.66875L 48.07309144295302 342.66875L 52.44337248322148 342.66875L 56.81365352348993 342.66875L 61.18393456375839 342.66875L 65.55421560402685 342.66875L 69.9244966442953 342.66875L 74.29477768456375 342.66875L 78.66505872483222 342.66875L 83.03533976510067 342.66875L 87.40562080536913 342.66875L 91.77590184563759 342.66875L 96.14618288590604 342.66875L 100.5164639261745 342.66875L 104.88674496644296 342.66875L 109.25702600671141 342.66875L 113.62730704697987 342.66875L 117.99758808724833 342.66875L 122.36786912751678 342.66875L 126.73815016778524 342.66875L 131.1084312080537 342.66875L 135.47871224832215 342.66875L 139.8489932885906 342.66875L 144.21927432885906 342.66875L 148.5895553691275 342.66875L 152.959836409396 342.66875L 157.33011744966444 342.66875L 161.7003984899329 342.66875L 166.07067953020135 342.66875L 170.4409605704698 342.66875L 174.81124161073825 342.66875L 179.18152265100673 342.66875L 183.55180369127518 342.66875L 187.92208473154363 342.66875L 192.2923657718121 342.66875L 196.66264681208054 342.66875L 201.032927852349 342.66875L 205.40320889261744 342.66875L 209.77348993288592 342.66875L 214.14377097315437 342.66875L 218.51405201342283 342.66875L 222.88433305369128 342.66875L 227.25461409395973 342.66875L 231.62489513422818 342.66875L 235.99517617449666 342.66875L 240.36545721476512 342.66875L 244.73573825503357 342.66875L 249.10601929530202 342.66875L 253.47630033557047 342.66875L 257.8465813758389 342.66875L 262.2168624161074 342.66875L 266.5871434563758 342.66875L 270.9574244966443 342.66875L 275.3277055369128 342.66875L 279.6979865771812 342.66875L 284.0682676174497 342.66875L 288.4385486577181 342.66875L 292.8088296979866 342.66875L 297.179110738255 342.66875L 301.5493917785235 342.66875L 305.919672818792 342.66875L 310.2899538590604 342.66875L 314.6602348993289 342.66875L 319.0305159395973 342.66875L 323.4007969798658 342.66875L 327.7710780201342 342.66875L 332.1413590604027 342.66875L 336.5116401006712 342.66875L 340.8819211409396 342.66875L 345.2522021812081 342.66875L 349.6224832214765 342.66875L 353.992764261745 342.66875L 358.36304530201346 342.66875L 362.7333263422819 342.66875L 367.10360738255036 342.66875L 371.4738884228188 342.66875L 375.84416946308727 342.66875L 380.2144505033557 342.66875L 384.5847315436242 342.66875L 388.95501258389265 342.66875L 393.3252936241611 342.66875L 397.69557466442956 342.66875L 402.065855704698 342.66875L 406.43613674496646 342.66875L 410.8064177852349 342.66875L 415.17669882550337 342.66875L 419.54697986577185 342.66875L 423.91726090604027 342.66875L 428.28754194630875 342.66875L 432.6578229865772 342.66875L 437.02810402684565 342.66875L 441.39838506711413 342.66875L 445.76866610738256 342.66875L 450.13894714765104 342.66875L 454.50922818791946 342.66875L 458.87950922818794 342.66875L 463.24979026845637 342.66875L 467.62007130872485 342.66875L 471.9903523489933 342.66875L 476.36063338926175 342.66875L 480.73091442953023 342.66875L 485.10119546979865 342.66875L 489.47147651006713 342.66875L 493.84175755033556 342.66875L 498.21203859060404 342.66875L 502.5823196308725 342.66875L 506.95260067114094 342.66875L 511.3228817114094 342.66875L 515.6931627516778 342.66875L 520.0634437919463 342.66875L 524.4337248322148 342.66875L 528.8040058724832 342.66875L 533.1742869127517 342.66875L 537.5445679530202 342.66875L 541.9148489932886 342.66875L 546.285130033557 342.66875L 550.6554110738256 342.66875L 555.025692114094 342.66875L 559.3959731543624 342.66875L 563.7662541946308 342.66875L 568.1365352348994 342.66875L 572.5068162751678 342.66875L 576.8770973154362 342.66875L 581.2473783557048 342.66875L 585.6176593959732 342.66875L 589.9879404362416 342.66875L 594.35822147651 342.66875L 598.7285025167786 342.66875L 603.098783557047 342.66875L 607.4690645973154 342.66875L 611.839345637584 342.66875L 616.2096266778524 342.66875L 620.5799077181208 342.66875L 624.9501887583892 342.66875L 629.3204697986578 342.66875L 633.6907508389262 342.66875L 638.0610318791946 342.66875L 642.4313129194632 342.66875L 646.8015939597316 342.66875L 651.171875 342.66875">
                                            </path>
                                            <g id="SvgjsG2210" class="apexcharts-series-markers-wrap"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2295" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker wils40vz6 no-pointer-events"
                                                        stroke="#ffffff" fill="#6571ff" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2211" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2290" x1="0" y1="0" x2="651.171875" y2="0" stroke="#7987a1"
                                        stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2291" x1="0" y1="0" x2="651.171875" y2="0" stroke-dasharray="0"
                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2292" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2293" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2294" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect2296" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect2297" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                                <rect id="SvgjsRect2192" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2246" class="apexcharts-yaxis" rel="0" transform="translate(31.828125, 0)">
                                    <g id="SvgjsG2247" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2248"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2249">80.00</tspan>
                                            <title>80.00</title>
                                        </text><text id="SvgjsText2250" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="117.0671875" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2251">60.00</tspan>
                                            <title>60.00</title>
                                        </text><text id="SvgjsText2252" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="202.734375" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2253">40.00</tspan>
                                            <title>40.00</title>
                                        </text><text id="SvgjsText2254" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="288.40156249999995" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2255">20.00</tspan>
                                            <title>20.00</title>
                                        </text><text id="SvgjsText2256" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="374.06874999999997" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2257">0.00</tspan>
                                            <title>0.00</title>
                                        </text></g>
                                    <g id="SvgjsG2258" class="apexcharts-yaxis-title"><text id="SvgjsText2259"
                                            font-family="Helvetica, Arial, sans-serif" x="36.359375" y="201.334375"
                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                            font-weight="900" fill="#7987a1"
                                            class="apexcharts-text apexcharts-yaxis-title-text "
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                            transform="rotate(-90 -22.828125 196.9375)">Revenue ( $1000 x )</text></g>
                                </g>
                                <g id="SvgjsG2187" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 200px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(101, 113, 255);"></span>
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
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
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
                            <div style="width: 772px; height: 527px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">
        <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="position: relative;">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Monthly sales</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye icon-sm me-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-trash icon-sm me-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                    </svg> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-printer icon-sm me-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                        </path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-download icon-sm me-2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg> <span class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">Sales are activities related to selling or the number of goods or services
                        sold in a given time period.</p>
                    <div id="monthlySalesChart" style="min-height: 318px;">
                        <div id="apexcharts10dqohrx" class="apexcharts-canvas apexcharts10dqohrx apexcharts-theme-light"
                            style="width: 391px; height: 318px;"><svg id="SvgjsSvg2298" width="391" height="318"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: rgb(255, 255, 255);">
                                <g id="SvgjsG2300" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(70.8315244510978, 30)">
                                    <defs id="SvgjsDefs2299">
                                        <linearGradient id="SvgjsLinearGradient2306" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2307" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2308" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2309" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMask10dqohrx">
                                            <rect id="SvgjsRect2325" width="332.34374999999994" height="260.66875"
                                                x="-16.175274451097806" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask10dqohrx"></clipPath>
                                        <clipPath id="nonForecastMask10dqohrx"></clipPath>
                                        <clipPath id="gridRectMarkerMask10dqohrx">
                                            <rect id="SvgjsRect2326" width="303.9932010978044" height="264.66875" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect2310" width="12.57456531547683" height="260.66875" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient2306)" class="apexcharts-xcrosshairs"
                                        y2="260.66875" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG2403" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2404" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText2406"
                                                font-family="Helvetica, Arial, sans-serif" x="0.8981832368197736"
                                                y="289.66875" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="600" fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2407">2021</tspan>
                                                <title>2021</title>
                                            </text><text id="SvgjsText2409" font-family="Helvetica, Arial, sans-serif"
                                                x="53.89099420918642" y="289.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2410">Mar '21</tspan>
                                                <title>Mar '21</title>
                                            </text><text id="SvgjsText2412" font-family="Helvetica, Arial, sans-serif"
                                                x="136.5238519966056" y="289.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2413">Jun '21</tspan>
                                                <title>Jun '21</title>
                                            </text><text id="SvgjsText2415" font-family="Helvetica, Arial, sans-serif"
                                                x="191.3130294426118" y="289.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2416">Aug '21</tspan>
                                                <title>Aug '21</title>
                                            </text><text id="SvgjsText2418" font-family="Helvetica, Arial, sans-serif"
                                                x="273.94588723003096" y="289.66875" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#000000" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2419">Nov '21</tspan>
                                                <title>Nov '21</title>
                                            </text></g>
                                        <line id="SvgjsLine2420" x1="-14.175274451097804" y1="261.66875"
                                            x2="314.16847554890217" y2="261.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG2435" class="apexcharts-grid">
                                        <g id="SvgjsG2436" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine2448" x1="-14.175274451097804" y1="0"
                                                x2="314.16847554890217" y2="0" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2449" x1="-14.175274451097804" y1="65.1671875"
                                                x2="314.16847554890217" y2="65.1671875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2450" x1="-14.175274451097804" y1="130.334375"
                                                x2="314.16847554890217" y2="130.334375" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2451" x1="-14.175274451097804" y1="195.50156249999998"
                                                x2="314.16847554890217" y2="195.50156249999998"
                                                stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2452" x1="-14.175274451097804" y1="260.66875"
                                                x2="314.16847554890217" y2="260.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2437" class="apexcharts-gridlines-vertical">
                                            <line id="SvgjsLine2438" x1="0.8981832368197736" y1="0"
                                                x2="0.8981832368197736" y2="260.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2440" x1="53.89099420918642" y1="0"
                                                x2="53.89099420918642" y2="260.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2442" x1="136.5238519966056" y1="0"
                                                x2="136.5238519966056" y2="260.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2444" x1="191.3130294426118" y1="0"
                                                x2="191.3130294426118" y2="260.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2446" x1="273.94588723003096" y1="0"
                                                x2="273.94588723003096" y2="260.66875" stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        </g>
                                        <line id="SvgjsLine2439" x1="0.8981832368197736" y1="261.66875"
                                            x2="0.8981832368197736" y2="267.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2441" x1="53.89099420918642" y1="261.66875"
                                            x2="53.89099420918642" y2="267.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2443" x1="136.5238519966056" y1="261.66875"
                                            x2="136.5238519966056" y2="267.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2445" x1="191.3130294426118" y1="261.66875"
                                            x2="191.3130294426118" y2="267.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2447" x1="273.94588723003096" y1="261.66875"
                                            x2="273.94588723003096" y2="267.66875" stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2454" x1="0" y1="260.66875" x2="299.9932010978044"
                                            y2="260.66875" stroke="transparent" stroke-dasharray="0"></line>
                                        <line id="SvgjsLine2453" x1="0" y1="1" x2="0" y2="260.66875"
                                            stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG2327" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2328" class="apexcharts-series" rel="1" seriesName="Sales"
                                            data:realIndex="0">
                                            <path id="SvgjsPath2332"
                                                d="M -6.287282657738415 260.66875L -6.287282657738415 66.56049999999999Q -6.287282657738415 62.56049999999999 -2.287282657738415 62.56049999999999L 2.287282657738415 62.56049999999999Q 6.287282657738415 62.56049999999999 6.287282657738415 66.56049999999999L 6.287282657738415 66.56049999999999L 6.287282657738415 260.66875L 6.287282657738415 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M -6.287282657738415 260.66875L -6.287282657738415 66.56049999999999Q -6.287282657738415 62.56049999999999 -2.287282657738415 62.56049999999999L 2.287282657738415 62.56049999999999Q 6.287282657738415 62.56049999999999 6.287282657738415 66.56049999999999L 6.287282657738415 66.56049999999999L 6.287282657738415 260.66875L 6.287282657738415 260.66875z"
                                                pathFrom="M -6.287282657738415 260.66875L -6.287282657738415 260.66875L 6.287282657738415 260.66875L 6.287282657738415 260.66875L 6.287282657738415 260.66875L 6.287282657738415 260.66875L 6.287282657738415 260.66875L -6.287282657738415 260.66875"
                                                cy="62.56049999999999" cx="6.287282657738415" j="0" val="152"
                                                barHeight="198.10825" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2338"
                                                d="M 21.556397683674565 260.66875L 21.556397683674565 122.60428124999999Q 21.556397683674565 118.60428124999999 25.556397683674565 118.60428124999999L 30.130962999151393 118.60428124999999Q 34.13096299915139 118.60428124999999 34.13096299915139 122.60428124999999L 34.13096299915139 122.60428124999999L 34.13096299915139 260.66875L 34.13096299915139 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 21.556397683674565 260.66875L 21.556397683674565 122.60428124999999Q 21.556397683674565 118.60428124999999 25.556397683674565 118.60428124999999L 30.130962999151393 118.60428124999999Q 34.13096299915139 118.60428124999999 34.13096299915139 122.60428124999999L 34.13096299915139 122.60428124999999L 34.13096299915139 260.66875L 34.13096299915139 260.66875z"
                                                pathFrom="M 21.556397683674565 260.66875L 21.556397683674565 260.66875L 34.13096299915139 260.66875L 34.13096299915139 260.66875L 34.13096299915139 260.66875L 34.13096299915139 260.66875L 34.13096299915139 260.66875L 21.556397683674565 260.66875"
                                                cy="118.60428124999999" cx="34.13096299915139" j="1" val="109"
                                                barHeight="142.06446875" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2344"
                                                d="M 46.705528314628225 260.66875L 46.705528314628225 143.45778124999998Q 46.705528314628225 139.45778124999998 50.705528314628225 139.45778124999998L 55.28009363010506 139.45778124999998Q 59.28009363010506 139.45778124999998 59.28009363010506 143.45778124999998L 59.28009363010506 143.45778124999998L 59.28009363010506 260.66875L 59.28009363010506 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 46.705528314628225 260.66875L 46.705528314628225 143.45778124999998Q 46.705528314628225 139.45778124999998 50.705528314628225 139.45778124999998L 55.28009363010506 139.45778124999998Q 59.28009363010506 139.45778124999998 59.28009363010506 143.45778124999998L 59.28009363010506 143.45778124999998L 59.28009363010506 260.66875L 59.28009363010506 260.66875z"
                                                pathFrom="M 46.705528314628225 260.66875L 46.705528314628225 260.66875L 59.28009363010506 260.66875L 59.28009363010506 260.66875L 59.28009363010506 260.66875L 59.28009363010506 260.66875L 59.28009363010506 260.66875L 46.705528314628225 260.66875"
                                                cy="139.45778124999998" cx="59.28009363010506" j="2" val="93"
                                                barHeight="121.21096874999999" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2350"
                                                d="M 74.5492086560412 260.66875L 74.5492086560412 117.39090625Q 74.5492086560412 113.39090625 78.5492086560412 113.39090625L 83.12377397151803 113.39090625Q 87.12377397151803 113.39090625 87.12377397151803 117.39090625L 87.12377397151803 117.39090625L 87.12377397151803 260.66875L 87.12377397151803 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 74.5492086560412 260.66875L 74.5492086560412 117.39090625Q 74.5492086560412 113.39090625 78.5492086560412 113.39090625L 83.12377397151803 113.39090625Q 87.12377397151803 113.39090625 87.12377397151803 117.39090625L 87.12377397151803 117.39090625L 87.12377397151803 260.66875L 87.12377397151803 260.66875z"
                                                pathFrom="M 74.5492086560412 260.66875L 74.5492086560412 260.66875L 87.12377397151803 260.66875L 87.12377397151803 260.66875L 87.12377397151803 260.66875L 87.12377397151803 260.66875L 87.12377397151803 260.66875L 74.5492086560412 260.66875"
                                                cy="113.39090625" cx="87.12377397151803" j="3" val="113"
                                                barHeight="147.27784375" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2356"
                                                d="M 101.4947057606344 260.66875L 101.4947057606344 100.4474375Q 101.4947057606344 96.4474375 105.4947057606344 96.4474375L 110.06927107611124 96.4474375Q 114.06927107611124 96.4474375 114.06927107611124 100.4474375L 114.06927107611124 100.4474375L 114.06927107611124 260.66875L 114.06927107611124 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 101.4947057606344 260.66875L 101.4947057606344 100.4474375Q 101.4947057606344 96.4474375 105.4947057606344 96.4474375L 110.06927107611124 96.4474375Q 114.06927107611124 96.4474375 114.06927107611124 100.4474375L 114.06927107611124 100.4474375L 114.06927107611124 260.66875L 114.06927107611124 260.66875z"
                                                pathFrom="M 101.4947057606344 260.66875L 101.4947057606344 260.66875L 114.06927107611124 260.66875L 114.06927107611124 260.66875L 114.06927107611124 260.66875L 114.06927107611124 260.66875L 114.06927107611124 260.66875L 101.4947057606344 260.66875"
                                                cy="96.4474375" cx="114.06927107611124" j="4" val="126"
                                                barHeight="164.22131249999998" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2362"
                                                d="M 129.3383861020474 260.66875L 129.3383861020474 54.83040625000001Q 129.3383861020474 50.83040625000001 133.3383861020474 50.83040625000001L 137.91295141752423 50.83040625000001Q 141.91295141752423 50.83040625000001 141.91295141752423 54.83040625000001L 141.91295141752423 54.83040625000001L 141.91295141752423 260.66875L 141.91295141752423 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 129.3383861020474 260.66875L 129.3383861020474 54.83040625000001Q 129.3383861020474 50.83040625000001 133.3383861020474 50.83040625000001L 137.91295141752423 50.83040625000001Q 141.91295141752423 50.83040625000001 141.91295141752423 54.83040625000001L 141.91295141752423 54.83040625000001L 141.91295141752423 260.66875L 141.91295141752423 260.66875z"
                                                pathFrom="M 129.3383861020474 260.66875L 129.3383861020474 260.66875L 141.91295141752423 260.66875L 141.91295141752423 260.66875L 141.91295141752423 260.66875L 141.91295141752423 260.66875L 141.91295141752423 260.66875L 129.3383861020474 260.66875"
                                                cy="50.83040625000001" cx="141.91295141752423" j="5" val="161"
                                                barHeight="209.83834374999998" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2368"
                                                d="M 156.2838832066406 260.66875L 156.2838832066406 19.640125000000012Q 156.2838832066406 15.640125000000012 160.2838832066406 15.640125000000012L 164.85844852211744 15.640125000000012Q 168.85844852211744 15.640125000000012 168.85844852211744 19.640125000000012L 168.85844852211744 19.640125000000012L 168.85844852211744 260.66875L 168.85844852211744 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 156.2838832066406 260.66875L 156.2838832066406 19.640125000000012Q 156.2838832066406 15.640125000000012 160.2838832066406 15.640125000000012L 164.85844852211744 15.640125000000012Q 168.85844852211744 15.640125000000012 168.85844852211744 19.640125000000012L 168.85844852211744 19.640125000000012L 168.85844852211744 260.66875L 168.85844852211744 260.66875z"
                                                pathFrom="M 156.2838832066406 260.66875L 156.2838832066406 260.66875L 168.85844852211744 260.66875L 168.85844852211744 260.66875L 168.85844852211744 260.66875L 168.85844852211744 260.66875L 168.85844852211744 260.66875L 156.2838832066406 260.66875"
                                                cy="15.640125000000012" cx="168.85844852211744" j="6" val="188"
                                                barHeight="245.02862499999998" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2374"
                                                d="M 184.1275635480536 260.66875L 184.1275635480536 78.29059375Q 184.1275635480536 74.29059375 188.1275635480536 74.29059375L 192.70212886353042 74.29059375Q 196.70212886353042 74.29059375 196.70212886353042 78.29059375L 196.70212886353042 78.29059375L 196.70212886353042 260.66875L 196.70212886353042 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 184.1275635480536 260.66875L 184.1275635480536 78.29059375Q 184.1275635480536 74.29059375 188.1275635480536 74.29059375L 192.70212886353042 74.29059375Q 196.70212886353042 74.29059375 196.70212886353042 78.29059375L 196.70212886353042 78.29059375L 196.70212886353042 260.66875L 196.70212886353042 260.66875z"
                                                pathFrom="M 184.1275635480536 260.66875L 184.1275635480536 260.66875L 196.70212886353042 260.66875L 196.70212886353042 260.66875L 196.70212886353042 260.66875L 196.70212886353042 260.66875L 196.70212886353042 260.66875L 184.1275635480536 260.66875"
                                                cy="74.29059375" cx="196.70212886353042" j="7" val="143"
                                                barHeight="186.37815625" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2380"
                                                d="M 211.97124388946656 260.66875L 211.97124388946656 131.7276875Q 211.97124388946656 127.7276875 215.97124388946656 127.7276875L 220.5458092049434 127.7276875Q 224.5458092049434 127.7276875 224.5458092049434 131.7276875L 224.5458092049434 131.7276875L 224.5458092049434 260.66875L 224.5458092049434 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 211.97124388946656 260.66875L 211.97124388946656 131.7276875Q 211.97124388946656 127.7276875 215.97124388946656 127.7276875L 220.5458092049434 127.7276875Q 224.5458092049434 127.7276875 224.5458092049434 131.7276875L 224.5458092049434 131.7276875L 224.5458092049434 260.66875L 224.5458092049434 260.66875z"
                                                pathFrom="M 211.97124388946656 260.66875L 211.97124388946656 260.66875L 224.5458092049434 260.66875L 224.5458092049434 260.66875L 224.5458092049434 260.66875L 224.5458092049434 260.66875L 224.5458092049434 260.66875L 211.97124388946656 260.66875"
                                                cy="127.7276875" cx="224.5458092049434" j="8" val="102"
                                                barHeight="132.9410625" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2386"
                                                d="M 238.91674099405975 260.66875L 238.91674099405975 117.39090625Q 238.91674099405975 113.39090625 242.91674099405975 113.39090625L 247.49130630953658 113.39090625Q 251.49130630953658 113.39090625 251.49130630953658 117.39090625L 251.49130630953658 117.39090625L 251.49130630953658 260.66875L 251.49130630953658 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 238.91674099405975 260.66875L 238.91674099405975 117.39090625Q 238.91674099405975 113.39090625 242.91674099405975 113.39090625L 247.49130630953658 113.39090625Q 251.49130630953658 113.39090625 251.49130630953658 117.39090625L 251.49130630953658 117.39090625L 251.49130630953658 260.66875L 251.49130630953658 260.66875z"
                                                pathFrom="M 238.91674099405975 260.66875L 238.91674099405975 260.66875L 251.49130630953658 260.66875L 251.49130630953658 260.66875L 251.49130630953658 260.66875L 251.49130630953658 260.66875L 251.49130630953658 260.66875L 238.91674099405975 260.66875"
                                                cy="113.39090625" cx="251.49130630953658" j="9" val="113"
                                                barHeight="147.27784375" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2392"
                                                d="M 266.76042133547276 260.66875L 266.76042133547276 113.480875Q 266.76042133547276 109.480875 270.76042133547276 109.480875L 275.3349866509496 109.480875Q 279.3349866509496 109.480875 279.3349866509496 113.480875L 279.3349866509496 113.480875L 279.3349866509496 260.66875L 279.3349866509496 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 266.76042133547276 260.66875L 266.76042133547276 113.480875Q 266.76042133547276 109.480875 270.76042133547276 109.480875L 275.3349866509496 109.480875Q 279.3349866509496 109.480875 279.3349866509496 113.480875L 279.3349866509496 113.480875L 279.3349866509496 260.66875L 279.3349866509496 260.66875z"
                                                pathFrom="M 266.76042133547276 260.66875L 266.76042133547276 260.66875L 279.3349866509496 260.66875L 279.3349866509496 260.66875L 279.3349866509496 260.66875L 279.3349866509496 260.66875L 279.3349866509496 260.66875L 266.76042133547276 260.66875"
                                                cy="109.480875" cx="279.3349866509496" j="10" val="116"
                                                barHeight="151.187875" barWidth="12.57456531547683"></path>
                                            <path id="SvgjsPath2398"
                                                d="M 293.705918440066 260.66875L 293.705918440066 103.054125Q 293.705918440066 99.054125 297.705918440066 99.054125L 302.28048375554283 99.054125Q 306.28048375554283 99.054125 306.28048375554283 103.054125L 306.28048375554283 103.054125L 306.28048375554283 260.66875L 306.28048375554283 260.66875z"
                                                fill="rgba(101,113,255,0.9)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask10dqohrx)"
                                                pathTo="M 293.705918440066 260.66875L 293.705918440066 103.054125Q 293.705918440066 99.054125 297.705918440066 99.054125L 302.28048375554283 99.054125Q 306.28048375554283 99.054125 306.28048375554283 103.054125L 306.28048375554283 103.054125L 306.28048375554283 260.66875L 306.28048375554283 260.66875z"
                                                pathFrom="M 293.705918440066 260.66875L 293.705918440066 260.66875L 306.28048375554283 260.66875L 306.28048375554283 260.66875L 306.28048375554283 260.66875L 306.28048375554283 260.66875L 306.28048375554283 260.66875L 293.705918440066 260.66875"
                                                cy="99.054125" cx="306.28048375554283" j="11" val="124"
                                                barHeight="161.614625" barWidth="12.57456531547683"></path>
                                            <g id="SvgjsG2330" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG2331" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2337" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2343" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2349" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2355" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2361" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2367" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2373" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2379" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2385" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2391" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG2397" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2329" class="apexcharts-datalabels" data:realIndex="0">
                                            <g id="SvgjsG2334" class="apexcharts-data-labels"
                                                transform="rotate(-90, 3.609375, 89.56049999999999)"><text
                                                    id="SvgjsText2336" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="3.609375" y="89.56049999999999" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="3.609375"
                                                    cy="89.56049999999999"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">152</text></g>
                                            <g id="SvgjsG2340" class="apexcharts-data-labels"
                                                transform="rotate(-90, 31.453055341412977, 145.60428124999999)"><text
                                                    id="SvgjsText2342" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="31.453055341412977" y="145.60428124999999" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="31.453055341412977"
                                                    cy="145.60428124999999"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">109</text></g>
                                            <g id="SvgjsG2346" class="apexcharts-data-labels"
                                                transform="rotate(-90, 56.60218597236664, 166.45778124999998)"><text
                                                    id="SvgjsText2348" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="56.60218597236664" y="166.45778124999998" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="56.60218597236664"
                                                    cy="166.45778124999998"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">93</text></g>
                                            <g id="SvgjsG2352" class="apexcharts-data-labels"
                                                transform="rotate(-90, 84.44586631377962, 140.39090625)"><text
                                                    id="SvgjsText2354" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="84.44586631377962" y="140.39090625" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="84.44586631377962"
                                                    cy="140.39090625"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">113</text></g>
                                            <g id="SvgjsG2358" class="apexcharts-data-labels"
                                                transform="rotate(-90, 111.39136341837282, 123.4474375)"><text
                                                    id="SvgjsText2360" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="111.39136341837282" y="123.4474375" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="111.39136341837282"
                                                    cy="123.4474375"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">126</text></g>
                                            <g id="SvgjsG2364" class="apexcharts-data-labels"
                                                transform="rotate(-90, 139.2350437597858, 77.83040625000001)"><text
                                                    id="SvgjsText2366" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="139.2350437597858" y="77.83040625000001" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="139.2350437597858"
                                                    cy="77.83040625000001"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">161</text></g>
                                            <g id="SvgjsG2370" class="apexcharts-data-labels"
                                                transform="rotate(-90, 166.18054086437903, 42.64012500000001)"><text
                                                    id="SvgjsText2372" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="166.18054086437903" y="42.64012500000001" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="166.18054086437903"
                                                    cy="42.64012500000001"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">188</text></g>
                                            <g id="SvgjsG2376" class="apexcharts-data-labels"
                                                transform="rotate(-90, 194.024221205792, 101.29059375)"><text
                                                    id="SvgjsText2378" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="194.024221205792" y="101.29059375" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="194.024221205792"
                                                    cy="101.29059375"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">143</text></g>
                                            <g id="SvgjsG2382" class="apexcharts-data-labels"
                                                transform="rotate(-90, 221.86790154720498, 154.7276875)"><text
                                                    id="SvgjsText2384" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="221.86790154720498" y="154.7276875" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="221.86790154720498"
                                                    cy="154.7276875"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">102</text></g>
                                            <g id="SvgjsG2388" class="apexcharts-data-labels"
                                                transform="rotate(-90, 248.81339865179817, 140.39090625)"><text
                                                    id="SvgjsText2390" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="248.81339865179817" y="140.39090625" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="248.81339865179817"
                                                    cy="140.39090625"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">113</text></g>
                                            <g id="SvgjsG2394" class="apexcharts-data-labels"
                                                transform="rotate(-90, 276.6570789932112, 136.480875)"><text
                                                    id="SvgjsText2396" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="276.6570789932112" y="136.480875" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="276.6570789932112"
                                                    cy="136.480875"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">116</text></g>
                                            <g id="SvgjsG2400" class="apexcharts-data-labels"
                                                transform="rotate(-90, 303.60257609780444, 126.054125)"><text
                                                    id="SvgjsText2402" font-family="'Roboto', Helvetica, sans-serif"
                                                    x="303.60257609780444" y="126.054125" text-anchor="start"
                                                    dominant-baseline="auto" font-size="10px" font-weight="600"
                                                    fill="#ffffff" class="apexcharts-datalabel" cx="303.60257609780444"
                                                    cy="126.054125"
                                                    style="font-family: Roboto, Helvetica, sans-serif;">124</text></g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2455" x1="-14.175274451097804" y1="0" x2="314.16847554890217"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2456" x1="-14.175274451097804" y1="0" x2="314.16847554890217"
                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2457" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2458" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2459" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect2460" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect2461" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                                <g id="SvgjsG2421" class="apexcharts-yaxis" rel="0" transform="translate(22.65625, 0)">
                                    <g id="SvgjsG2422" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2423"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2424">200</tspan>
                                            <title>200</title>
                                        </text><text id="SvgjsText2425" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="96.5671875" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2426">150</tspan>
                                            <title>150</title>
                                        </text><text id="SvgjsText2427" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="161.734375" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2428">100</tspan>
                                            <title>100</title>
                                        </text><text id="SvgjsText2429" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="226.90156249999998" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2430">50</tspan>
                                            <title>50</title>
                                        </text><text id="SvgjsText2431" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="292.06874999999997" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2432">0</tspan>
                                            <title>0</title>
                                        </text></g>
                                    <g id="SvgjsG2433" class="apexcharts-yaxis-title"><text id="SvgjsText2434"
                                            font-family="Helvetica, Arial, sans-serif" x="36.09375" y="160.334375"
                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                            font-weight="900" fill="#7987a1"
                                            class="apexcharts-text apexcharts-yaxis-title-text "
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                            transform="rotate(-90 -13.171875 155.9375)">Number of Sales</text></g>
                                </g>
                                <g id="SvgjsG2301" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 159px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(101, 113, 255);"></span>
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
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 440px; height: 448px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="position: relative;">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Cloud storage</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye icon-sm me-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-trash icon-sm me-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                    </svg> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-printer icon-sm me-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                        </path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-download icon-sm me-2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg> <span class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <div id="storageChart" style="min-height: 238.7px;">
                        <div id="apexcharts80wywb8q" class="apexcharts-canvas apexcharts80wywb8q apexcharts-theme-light"
                            style="width: 258px; height: 238.7px;"><svg id="SvgjsSvg2462" width="258"
                                height="238.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG2464" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(12, 0)">
                                    <defs id="SvgjsDefs2463">
                                        <clipPath id="gridRectMask80wywb8q">
                                            <rect id="SvgjsRect2466" width="242" height="260" x="-3" y="-1" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask80wywb8q"></clipPath>
                                        <clipPath id="nonForecastMask80wywb8q"></clipPath>
                                        <clipPath id="gridRectMarkerMask80wywb8q">
                                            <rect id="SvgjsRect2467" width="240" height="262" x="-2" y="-2" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2468" class="apexcharts-radialbar">
                                        <g id="SvgjsG2469">
                                            <g id="SvgjsG2470" class="apexcharts-tracks">
                                                <g id="SvgjsG2471" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="1">
                                                    <path id="apexcharts-radialbarTrack-0"
                                                        d="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 117.98480350341804 30.93048913102254"
                                                        fill="none" fill-opacity="1" stroke="rgba(233,236,239,1)"
                                                        stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="11.36829268292683" stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 117.98480350341804 30.93048913102254">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2473">
                                                <g id="SvgjsG2478" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="StoragexUsed" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2479"
                                                        d="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 41.84728874313238 160.2121371423509"
                                                        fill="none" fill-opacity="1" stroke="rgba(101,113,255,1)"
                                                        stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="11.368292682926832" stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                        data:angle="241" data:value="67" index="0" j="0"
                                                        data:pathOrig="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 41.84728874313238 160.2121371423509">
                                                    </path>
                                                </g>
                                                <circle id="SvgjsCircle2474" r="66.38536585365854" cx="118" cy="118"
                                                    class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                <g id="SvgjsG2475" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                        id="SvgjsText2476" font-family="Helvetica, Arial, sans-serif"
                                                        x="118" y="107" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#7987a1"
                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Storage
                                                        Used</text><text id="SvgjsText2477"
                                                        font-family="Helvetica, Arial, sans-serif" x="118" y="150"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="30px"
                                                        font-weight="400" fill="#000000"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: Helvetica, Arial, sans-serif;">67%</text>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2480" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2481" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0"
                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2465" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 d-flex justify-content-end">
                            <div>
                                <label
                                    class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total
                                    storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                                <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span
                                        class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                                <h5 class="fw-bolder mb-0">~5TB</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Upgrade storage</button>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 307px; height: 448px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">
        <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Inbox</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye icon-sm me-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-trash icon-sm me-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                    </svg> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-printer icon-sm me-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                        </path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-download icon-sm me-2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg> <span class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Leonardo Payne</h6>
                                    <p class="text-muted tx-12">12.30 PM</p>
                                </div>
                                <p class="text-muted tx-13">Hey! there I'm available...</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Carl Henson</h6>
                                    <p class="text-muted tx-12">02.14 AM</p>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Jensen Combs</h6>
                                    <p class="text-muted tx-12">08.22 PM</p>
                                </div>
                                <p class="text-muted tx-13">This template is awesome!</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Amiah Burton</h6>
                                    <p class="text-muted tx-12">05.49 AM</p>
                                </div>
                                <p class="text-muted tx-13">Nice to meet you</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                                    <p class="text-muted tx-12">01.19 AM</p>
                                </div>
                                <p class="text-muted tx-13">Hey! there I'm available...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Projects</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye icon-sm me-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-trash icon-sm me-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                    </svg> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-printer icon-sm me-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                        </path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-download icon-sm me-2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg> <span class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    <th class="pt-0">Project Name</th>
                                    <th class="pt-0">Start Date</th>
                                    <th class="pt-0">Due Date</th>
                                    <th class="pt-0">Status</th>
                                    <th class="pt-0">Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NobleUI jQuery</td>
                                    <td>01/01/2021</td>
                                    <td>26/04/2021</td>
                                    <td><span class="badge bg-danger">Released</span></td>
                                    <td>Leonardo Payne</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>NobleUI Angular</td>
                                    <td>01/01/2021</td>
                                    <td>26/04/2021</td>
                                    <td><span class="badge bg-success">Review</span></td>
                                    <td>Carl Henson</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>NobleUI ReactJs</td>
                                    <td>01/05/2021</td>
                                    <td>10/09/2021</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>Jensen Combs</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>NobleUI VueJs</td>
                                    <td>01/01/2021</td>
                                    <td>31/11/2021</td>
                                    <td><span class="badge bg-warning">Work in Progress</span>
                                    </td>
                                    <td>Amiah Burton</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>NobleUI Laravel</td>
                                    <td>01/01/2021</td>
                                    <td>31/12/2021</td>
                                    <td><span class="badge bg-danger">Coming soon</span></td>
                                    <td>Yaretzi Mayo</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>NobleUI NodeJs</td>
                                    <td>01/01/2021</td>
                                    <td>31/12/2021</td>
                                    <td><span class="badge bg-primary">Coming soon</span></td>
                                    <td>Carl Henson</td>
                                </tr>
                                <tr>
                                    <td class="border-bottom">3</td>
                                    <td class="border-bottom">NobleUI EmberJs</td>
                                    <td class="border-bottom">01/05/2021</td>
                                    <td class="border-bottom">10/11/2021</td>
                                    <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                                    <td class="border-bottom">Jensen Combs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

</div>