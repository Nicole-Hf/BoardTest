<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFour Board</title>
    <link rel="stylesheet" href="{{ asset('board/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('board/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('board/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('board/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <header class="clearfix">
            <div class="logo-wrapper left">
                <a href="#" title="Draw IO Clone">
                    <h1 style="display: inline-block">{{ $sesion->title }}</h1>
                </a>
            </div>
            <div class="export-wrapper right">
                <button class="btn-save-progress"> Save Progress </button>
                <button class="btn-save">Export as </button>
                <input type="radio" name="export-extension" value="svg" id="export-svg">
                <span>SVG</span>
                <input type="radio" name="export-extension" value="png" id="export-png">
                <span>PNG</span>
                <a class="download-link" href="#" download=""></a>
            </div>
        </header>
        <main>
            <!-- Modal to restore drafts -->
            <div class="modal hide">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Load Previous Drafts</h2>
                    </div>
                    <div class="modal-body">
                        <div class="draft-control-wrapper clearfix">
                            <div class="draft-select-wrapper left">
                                <span>Select a draft to continue</span>
                                <select id="saved-draft-selector"></select>
                            </div>
                            <div class="draft-button-wrapper right">
                                <button id="btn-edit-draft">Edit</button>
                                <button id="btn-cancel-draft">Cancel</button>
                            </div>
                        </div>
                        <svg class="saved-draft-preview" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xhtml="http://www.w3.org/1999/xhtml"
                            width="100%" height="60%" viewbox="0 0 800 800">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="show-shape-info hide">
                <h3 class="show-shape-info-header">Shape Info</h3>
                <span class="shape-name"></span>
                <div class="show-shape-info-content">
                    <svg class="show-shape-info-preview" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xhtml="http://www.w3.org/1999/xhtml"
                        width="100%" height="60%" viewbox="0 0 800 800">
                        <g>
                            <rect x="1.44" y="7.68" width="28.8" height="14.4" fill="#ffffff"
                                stroke="#000000" stroke-width="1.3"></rect>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="clearfix">
                <div class="sidebar-left left">
                    <!-- C4 -->
                    <div class="general">
                        <h2>C4</h2>
                        <!-- Person -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Person">
                                <g>
                                    <path class="st1" d="M 2 32 C 2 21 2 15 18 15 C 8 15 8 4 18 4 C 28 4 28 15 18 15 C 34 15 34 21 34 32 Z"
                                        fill="#08427b" stroke="#073b6f" stroke-linecap="round" stroke-linejoin="round" pointer-events="all"/>
                                </g>
                            </a>
                        </svg>
                        <!-- Container -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Container">
                                <g>
                                    <rect x="1.44" y="7.68" width="28.8" height="14.44" fill="#438dd5"
                                        stroke="#3d81c3" stroke-linecap="round" stroke-linejoin="round" pointer-events="all"/>
                                </g>
                            </a>
                        </svg>
                        <!-- Component -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Component">
                                <g>
                                    <rect class="st7" x="1.44" y="7.68" width="28.8" height="14.4" fill="#85bbf0"
                                        stroke="#78a8d8" stroke-linecap="round" stroke-linejoin="round" pointer-events="all"/>
                                </g>
                            </a>
                        </svg>
                        <!-- Database -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Database">
                                <g>
                                    <path
                                        d="M 2.25 23.85 L 2.25 5.85 C 2.25 3.36 8.29 1.35 15.75 1.35 C 23.21 1.35 29.25 3.36 29.25 5.85 L 29.25 23.85 C 29.25 26.34 23.21 28.35 15.75 28.35 C 8.29 28.35 2.25 26.34 2.25 23.85 Z"
                                        fill="#438dd5" stroke="#000000" stroke-width="1.3" stroke-miterlimit="10"
                                        pointer-events="all"/>
                                    <path
                                        d="M 2.25 5.85 C 2.25 8.34 8.29 10.35 15.75 10.35 C 23.21 10.35 29.25 8.34 29.25 5.85"
                                        fill="none" stroke="#000000" stroke-width="1.3" stroke-miterlimit="10"
                                        pointer-events="all"/>
                                </g>
                            </a>
                        </svg>
                        <!-- Software System -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Software System">
                                <g>
                                    <rect x="1.44" y="7.68" width="28.8" height="14.4" fill="#1168bd"
                                        stroke="#1864ad" stroke-linecap="round" stroke-linejoin="round" pointer-events="all"/>
                                </g>
                            </a>
                        </svg>
                        <!-- Software System External -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Software System">
                                <g>
                                    <rect x="1.44" y="7.68" width="28.8" height="14.4"  fill="#999"
                                    stroke="#8b8b8b" stroke-linecap="round" stroke-linejoin="round" pointer-events="all"/>
                                </g>
                            </a>
                        </svg>
                        <!-- Software System -->
                        <svg class="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <a class='sidebar-shape' href='#' title="Software System">
                                <g>
                                    <rect x="3" y="9" width="30" height="17" fill="none" stroke="white" pointer-events="stroke" visibility="hidden" stroke-width="9"></rect>
                                    <rect x="3" y="9" width="30" height="17" fill="none" stroke="#000000" stroke-dasharray="0.5700000000000001 0.5700000000000001" pointer-events="all"></rect>
                                </g>
                            </a>
                        </svg>
                        <!-- Connector -->
                        <svg class="shape">
                            <a class='sidebar-shape' href='#' title="DottedLine">
                                <g>
                                    <path d="M 2.6 27.56 L 28.6 1.56" fill="none" stroke="white" stroke-width="9.3"
                                        stroke-miterlimit="10" pointer-events="stroke" visibility="hidden"></path>
                                    <path d="M 2.6 27.56 L 28.6 1.56" fill="none" stroke="#000000" stroke-width="1.3"
                                        stroke-miterlimit="10" stroke-dasharray="1.04 3.12" pointer-events="stroke">
                                    </path>
                                </g>
                            </a>
                        </svg>

                        <!-- <svg class="st29" width="8.2677in" height="11.693in" color-interpolation-filters="sRGB"
                            version="1.1" viewBox="0 0 595.28 841.89" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                            xmlns:v="http://schemas.microsoft.com/visio/2003/SVGExtensions/"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <metadata>
                                <rdf:RDF>
                                    <cc:Work rdf:about="">
                                        <dc:format>image/svg+xml</dc:format>
                                        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                        <dc:title />
                                    </cc:Work>
                                </rdf:RDF>
                            </metadata>
                            <v:documentProperties v:langID="5129" v:metric="true" v:viewMarkup="false">
                                <v:userDefs>
                                    <v:ud v:nameU="msvNoAutoConnect" v:val="VT0(1):26" />
                                </v:userDefs>
                            </v:documentProperties>

                            <style type="text/css">
                                <![CDATA[
                                .st1 {
                                    fill: #08427b;
                                    stroke: #073b6f;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st2 {
                                    fill: #ffffff;
                                    font-family: Calibri;
                                    font-size: 0.833336em
                                }

                                .st3 {
                                    font-size: 0.599989em
                                }

                                .st4 {
                                    font-size: 0.799995em
                                }

                                .st5 {
                                    fill: #1168bd;
                                    stroke: #1864ad;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st6 {
                                    fill: #438dd5;
                                    stroke: #3d81c3;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st7 {
                                    fill: #85bbf0;
                                    stroke: #78a8d8;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st8 {
                                    fill: #000000;
                                    font-family: Calibri;
                                    font-size: 0.833336em
                                }

                                .st9 {
                                    fill: #438dd5
                                }

                                .st10 {
                                    stroke: #3d81c3;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st11 {
                                    fill: #3d81c3;
                                    stroke: #3d81c3;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.75
                                }

                                .st12 {
                                    stroke: #408dd5;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st13 {
                                    fill: #408dd5;
                                    stroke: none;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.75
                                }

                                .st14 {
                                    fill: #438dd5;
                                    stroke: #3d81c3;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.283465
                                }

                                .st15 {
                                    marker-end: url(#mrkr13-73);
                                    stroke: #444444;
                                    stroke-dasharray: 5.25, 3.75;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.75
                                }

                                .st16 {
                                    fill: #444444;
                                    fill-opacity: 1;
                                    stroke: #444444;
                                    stroke-opacity: 1;
                                    stroke-width: 0.22935779816514
                                }

                                .st17 {
                                    fill: #ffffff;
                                    stroke: none;
                                    stroke-linecap: butt;
                                    stroke-width: 7.2
                                }

                                .st18 {
                                    fill: #000000;
                                    font-family: Calibri;
                                    font-size: 0.666664em
                                }

                                .st19 {
                                    font-size: 0.749991em
                                }

                                .st20 {
                                    fill: none;
                                    stroke: #444444;
                                    stroke-dasharray: 7.5, 4.5;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.5
                                }

                                .st21 {
                                    font-size: 1em
                                }

                                .st22 {
                                    fill: #999999;
                                    stroke: #8b8b8b;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st23 {
                                    fill: #999999
                                }

                                .st24 {
                                    stroke: #8b8b8b;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st25 {
                                    fill: #8b8b8b;
                                    stroke: #8b8b8b;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.75
                                }

                                .st26 {
                                    stroke: #999999;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1
                                }

                                .st27 {
                                    fill: #999999;
                                    stroke: none;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.75
                                }

                                .st28 {
                                    fill: #999999;
                                    stroke: #8b8b8b;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 0.283465
                                }

                                .st29 {
                                    fill: none;
                                    fill-rule: evenodd;
                                    font-size: 12px;
                                    overflow: visible;
                                    stroke-linecap: square;
                                    stroke-miterlimit: 3
                                }
                                ]]>
                            </style>
                            <defs id="Markers">
                                <g id="lend13">
                                    <path d="m3 1-3-1 3-1v2" />
                                </g>
                                <marker id="mrkr13-73" class="st16" overflow="visible" orient="auto" refX="-13.08"
                                    v:arrowSize="2" v:arrowType="13" v:setback="13.08">
                                    <use transform="scale(-4.36)" xlink:href="#lend13" />
                                </marker>
                            </defs>
                            <g transform="translate(18 -701.72)" v:groupContext="shape" v:mID="1">
                                <title>User</title>
                                <desc>user [Person] description of the user</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.498" cx="53.1496" cy="804.641" />
                                <path class="st1"
                                    d="m37.41 767.48h-17.57a19.842 19.842-180 0 0-19.84 19.84v34.73a19.842 19.842-180 0 0 19.84 19.84h66.62a19.842 19.842-180 0 0 19.84-19.84v-34.73a19.842 19.842-180 0 0-19.84-19.84h-17.57a26.362 26.504-180 1 0-31.48 0z"
                                    fill="#08427b" stroke="#073b6f" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <text class="st2" x="44.34" y="787.14001" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />user
                                    <v:newlineChar />
                                    <tspan class="st3" x="42.889999" dy="1.6670001em" font-size="5.9999px"
                                        v:langID="1033">[Person]
                                        <v:newlineChar />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="2.312em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                        <v:paragraph v:horizAlign="1" />
                                    </tspan>
                                    <tspan class="st4" x="39.759998" dy="1.375em" font-size="8px"
                                        v:langID="1033">the user</tspan>
                                </text>
                            </g>
                            <g transform="translate(145.56 -725.6)" v:groupContext="shape" v:mID="2">
                                <title>Software System</title>
                                <desc>name [Software System] description of system</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.4094" cx="53.1496" cy="804.685" />
                                <rect class="st5" y="767.48" width="106.3" height="74.409" fill="#1168bd"
                                    stroke="#1864ad" stroke-linecap="round" stroke-linejoin="round" />
                                <text class="st2" x="41.650002" y="790.19" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="30.83" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Software System]
                                        <v:lf />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="2.187em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="41.689999" dy="1.188em" font-size="8px"
                                        v:langID="1033">system</tspan>
                                </text>
                            </g>
                            <g transform="translate(273.12 -725.6)" v:groupContext="shape" v:mID="3">
                                <title>Container</title>
                                <desc>name [Container: technology] description of container</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.4094" cx="53.1496" cy="804.685" />
                                <rect class="st6" y="767.48" width="106.3" height="74.409" fill="#438dd5"
                                    stroke="#3d81c3" stroke-linecap="round" stroke-linejoin="round" />
                                <text class="st2" x="41.650002" y="792.19" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Container: technology]
                                        <v:newlineChar />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="1.687em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="37.59" dy="1.188em" font-size="8px"
                                        v:langID="1033">container</tspan>
                                </text>
                            </g>
                            <g transform="translate(412.75 -725.6)" v:groupContext="shape" v:mID="4">
                                <title>Component</title>
                                <desc>name [Component: technology] description of component</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.4094" cx="53.1496" cy="804.685" />
                                <rect class="st7" y="767.48" width="106.3" height="74.409" fill="#85bbf0"
                                    stroke="#78a8d8" stroke-linecap="round" stroke-linejoin="round" />
                                <text class="st8" x="41.650002" y="790.19" fill="#000000"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="21.9" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Component: technology]
                                        <v:lf />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="2.187em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="34.41" dy="1.188em" font-size="8px"
                                        v:langID="1033">component</tspan>
                                </text>
                            </g>
                            <g transform="translate(18 -595.28)" v:groupContext="shape" v:mID="5">
                                <title>Database</title>
                                <desc>name [Container: technology] description of database</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="54.5669" cx="53.1496" cy="814.606" />
                                <path class="st9"
                                    d="m106.28 777.33a52.652 9.8477-180 0 0-52.58-9.85h-0.07a53.71 10.083-180 0 0-53.63 9.92v54.41a53.71 10.083 0 0 0 53.63 10.08h0.08a52.652 9.8477 0 0 0 52.58-9.85z"
                                    fill="#438dd5" />
                                <g stroke="#3d81c3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="st10"
                                        d="m106.28 777.33a52.652 9.8477-180 0 0-52.58-9.85h-0.07a53.71 10.083-180 0 0-53.63 9.92v54.41a53.71 10.083 0 0 0 53.63 10.08h0.08a52.652 9.8477 0 0 0 52.58-9.85l-0.01-54.71" />
                                    <path class="st10" d="m0.08 777.24a53.71 10.083 0 0 0 53.71 10.08" />
                                    <path class="st10" d="m106.3 777.48a52.652 9.8477-180 0 1-52.65 9.84" />
                                </g><text class="st2" x="41.650002" y="802.10999" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Container: technology]
                                        <v:newlineChar />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="1.687em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="38.299999" dy="1.188em" font-size="8px"
                                        v:langID="1033">database</tspan>
                                </text>
                            </g>
                            <g transform="translate(145.56 -595.28)" v:groupContext="group" v:mID="6">
                                <title>Mobile App</title>
                                <desc>name [Container: technology] description of container</desc>
                                <g v:groupContext="shape" v:mID="7">
                                    <title>Container.7</title>
                                    <rect class="st11" y="767.48" width="106.3" height="74.409"
                                        rx="4.252" ry="4.252" fill="#3d81c3" stroke="#3d81c3"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width=".75" />
                                </g>
                                <g transform="rotate(-90 35.781 776.26)" v:groupContext="shape" v:mID="8">
                                    <title>Sheet.8</title>
                                    <path class="st12" d="m0 841.89h14.71" stroke="#408dd5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <g transform="translate(1.9549 -33.341)" v:groupContext="shape" v:mID="9">
                                    <title>Sheet.9</title>
                                    <circle class="st13" cx="3.0301" cy="838.86" r="3.0301"
                                        fill="#408dd5" />
                                </g>
                                <g transform="translate(9.2126 -2.7638)" v:groupContext="shape" v:mID="10">
                                    <title>Container</title>
                                    <rect class="st6" y="773.01" width="87.874" height="68.882"
                                        rx="1.4173" ry="1.4173" fill="#438dd5" stroke="#3d81c3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <g v:groupContext="groupContent" v:mID="6">
                                    <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                    <v:textRect width="80.79" height="62.3622" cx="53.1496" cy="805.039" />
                                    <text class="st2" x="41.650002" y="790.34003" fill="#ffffff"
                                        font-family="Calibri" font-size="10px" v:langID="1030">
                                        <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                        <v:tabList />name
                                        <v:newlineChar />
                                        <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                            v:langID="1033">[Container: technology]
                                            <v:newlineChar />
                                            <v:newlineChar />
                                        </tspan>
                                        <tspan class="st4" x="30.690001" dy="1.687em" font-size="8px"
                                            v:langID="1033">description of
                                            <v:newlineChar />
                                            <v:paragraph v:horizAlign="1" />
                                        </tspan>
                                        <tspan class="st4" x="37.59" dy="1.6em" font-size="8px"
                                            v:langID="1033">container</tspan>
                                    </text>
                                </g>
                            </g>
                            <g transform="translate(273.12 -595.28)" v:groupContext="group" v:mID="11">
                                <title>Web browser</title>
                                <g v:groupContext="group" v:mID="12">
                                    <title>Sheet.12</title>
                                    <g v:groupContext="shape" v:mID="13">
                                        <title>Container.7</title>
                                        <rect class="st11" y="767.48" width="106.3" height="74.409"
                                            rx="1.4173" ry="1.4173" fill="#3d81c3" stroke="#3d81c3"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width=".75" />
                                    </g>
                                    <g transform="translate(3.47 -66.614)" v:groupContext="shape" v:mID="14">
                                        <title>Sheet.14</title>
                                        <circle class="st13" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#408dd5" />
                                    </g>
                                    <g transform="translate(2.126 -2.126)" v:groupContext="shape" v:mID="15">
                                        <title>Container</title>
                                        <rect class="st6" y="778.82" width="102.05" height="63.071"
                                            rx="1.4173" ry="1.4173" fill="#438dd5" stroke="#3d81c3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <g transform="translate(10.948 -66.614)" v:groupContext="shape" v:mID="16">
                                        <title>Sheet.16</title>
                                        <circle class="st13" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#408dd5" />
                                    </g>
                                    <g transform="translate(18.425 -66.614)" v:groupContext="shape" v:mID="17">
                                        <title>Sheet.17</title>
                                        <circle class="st13" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#408dd5" />
                                    </g>
                                    <g transform="translate(26.169 -66.609)" v:groupContext="shape" v:mID="18">
                                        <title>Container.14</title>
                                        <rect class="st14" y="835.82" width="77.862" height="6.07"
                                            rx="2.8346" ry="2.8346" fill="#438dd5" stroke="#3d81c3"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width=".28346" />
                                    </g>
                                </g>
                                <g v:groupContext="shape" v:mID="19">
                                    <title>Sheet.19</title>
                                    <desc>name [Container: technology] description of container</desc>
                                    <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                    <v:textRect width="100.63" height="61.6535" cx="53.1496" cy="808.228" />
                                    <text class="st2" x="41.650002" y="793.53003" fill="#ffffff"
                                        font-family="Calibri" font-size="10px" v:langID="1030">
                                        <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                        <v:tabList />name
                                        <v:newlineChar />
                                        <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                            v:langID="1033">[Container: technology]
                                            <v:newlineChar />
                                            <v:newlineChar />
                                        </tspan>
                                        <tspan class="st4" x="30.68" dy="1.687em" font-size="8px"
                                            v:langID="1033">description of
                                            <v:newlineChar />
                                            <v:paragraph v:horizAlign="1" />
                                        </tspan>
                                        <tspan class="st4" x="37.59" dy="1.6em" font-size="8px"
                                            v:langID="1033">container</tspan>
                                    </text>
                                </g>
                            </g>
                            <g transform="translate(425.2 -626.22)" v:groupContext="shape" v:mID="20">
                                <title>Relationship</title>
                                <desc>Uses [technology]</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="40.58" height="24.0035" cx="40.8059" cy="834.733" />
                                <path class="st15" d="m0 834.8h71.8" marker-end="url(#mrkr13-73)" stroke="#444"
                                    stroke-dasharray="5.25, 3.75" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width=".75" />
                                <rect class="st17" x="25.425" y="826.73" width="30.761" height="16"
                                    fill="#fff" v:rectContext="textBkgnd" />
                                <text class="st18" x="33.119999" y="832.72998" fill="#000000"
                                    font-family="Calibri" font-size="8px" v:langID="5129">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />Uses
                                    <v:newlineChar />
                                    <tspan class="st19" x="25.43" dy="1.3329999em" font-size="5.9999px"
                                        v:langID="1033">[technology]</tspan>
                                </text>
                            </g>
                            <g transform="translate(18 -444.03)" v:groupContext="shape" v:mID="21">
                                <title>Software System Boundary</title>
                                <desc>name [Software System]</desc>
                                <v:userDefs>
                                    <v:ud v:nameU="msvStructureType" v:prompt="" v:val="VT4(Container)" />
                                </v:userDefs>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" v:verticalAlign="2" />
                                <v:textRect width="198.43" height="119.212" cx="99.2126" cy="782.284" />
                                <path class="st20" d="m0 841.89h198.43v-119.21h-198.43z" fill="none"
                                    stroke="#444" stroke-dasharray="7.5, 4.5" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width=".5" />
                                <text class="st8" x="4" y="823.39001" fill="#000000"
                                    font-family="Calibri" font-size="10px" v:langID="5129">
                                    <v:paragraph v:spLine="-1" />
                                    <v:tabList />n<tspan class="st21" font-size="10px" v:langID="1030">ame
                                        <v:lf />
                                    </tspan>
                                    <tspan class="st3" x="4" dy="1.9170001em" font-size="5.9999px"
                                        v:langID="1033">[Software System]</tspan>
                                </text>
                            </g>
                            <g transform="translate(250.97 -444.03)" v:groupContext="shape" v:mID="22">
                                <title>Container Boundary</title>
                                <desc>name [Container]</desc>
                                <v:userDefs>
                                    <v:ud v:nameU="msvStructureType" v:prompt="" v:val="VT4(Container)" />
                                </v:userDefs>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" v:verticalAlign="2" />
                                <v:textRect width="198.43" height="119.212" cx="99.2126" cy="782.284" />
                                <path class="st20" d="m0 841.89h198.43v-119.21h-198.43z" fill="none"
                                    stroke="#444" stroke-dasharray="7.5, 4.5" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width=".5" />
                                <text class="st8" x="4" y="823.39001" fill="#000000"
                                    font-family="Calibri" font-size="10px" v:langID="5129">
                                    <v:paragraph v:spLine="-1" />
                                    <v:tabList />n<tspan class="st21" font-size="10px" v:langID="1030">ame
                                        <v:lf />
                                    </tspan>
                                    <tspan class="st3" x="4" dy="1.9170001em" font-size="5.9999px"
                                        v:langID="1033">[Container]</tspan>
                                </text>
                            </g>
                            <g transform="translate(18 -289.83)" v:groupContext="shape" v:mID="23">
                                <title>User Gray</title>
                                <desc>user [Person] description of the user</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.498" cx="53.1496" cy="804.641" />
                                <path class="st22"
                                    d="m37.41 767.48h-17.57a19.842 19.842-180 0 0-19.84 19.84v34.73a19.842 19.842-180 0 0 19.84 19.84h66.62a19.842 19.842-180 0 0 19.84-19.84v-34.73a19.842 19.842-180 0 0-19.84-19.84h-17.57a26.362 26.504-180 1 0-31.48 0z"
                                    fill="#999" stroke="#8b8b8b" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <text class="st2" x="44.34" y="787.14001" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />user
                                    <v:newlineChar />
                                    <tspan class="st3" x="42.889999" dy="1.6670001em" font-size="5.9999px"
                                        v:langID="1033">[Person]
                                        <v:newlineChar />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="2.312em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                        <v:paragraph v:horizAlign="1" />
                                    </tspan>
                                    <tspan class="st4" x="39.759998" dy="1.375em" font-size="8px"
                                        v:langID="1033">the user</tspan>
                                </text>
                            </g>
                            <g transform="translate(145.56 -313.71)" v:groupContext="shape" v:mID="24">
                                <title>Software System Gray</title>
                                <desc>name [Software System] description of system</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.4094" cx="53.1496" cy="804.685" />
                                <rect class="st22" y="767.48" width="106.3" height="74.409" fill="#999"
                                    stroke="#8b8b8b" stroke-linecap="round" stroke-linejoin="round" />
                                <text class="st2" x="41.650002" y="790.19" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="30.83" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Software System]
                                        <v:lf />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="2.187em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="41.689999" dy="1.188em" font-size="8px"
                                        v:langID="1033">system</tspan>
                                </text>
                            </g>
                            <g transform="translate(273.12 -313.71)" v:groupContext="shape" v:mID="25">
                                <title>Container Gray</title>
                                <desc>name [Container: technology] description of container</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.4094" cx="53.1496" cy="804.685" />
                                <rect class="st22" y="767.48" width="106.3" height="74.409" fill="#999"
                                    stroke="#8b8b8b" stroke-linecap="round" stroke-linejoin="round" />
                                <text class="st2" x="41.650002" y="792.19" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Container: technology]
                                        <v:newlineChar />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="1.687em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="37.59" dy="1.188em" font-size="8px"
                                        v:langID="1033">container</tspan>
                                </text>
                            </g>
                            <g transform="translate(412.75 -313.71)" v:groupContext="shape" v:mID="26">
                                <title>Component Gray</title>
                                <desc>name [Component: technology] description of component</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="74.4094" cx="53.1496" cy="804.685" />
                                <rect class="st22" y="767.48" width="106.3" height="74.409" fill="#999"
                                    stroke="#8b8b8b" stroke-linecap="round" stroke-linejoin="round" />
                                <text class="st8" x="41.650002" y="790.19" fill="#000000"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="21.9" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Component: technology]
                                        <v:lf />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="2.187em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="34.41" dy="1.188em" font-size="8px"
                                        v:langID="1033">component</tspan>
                                </text>
                            </g>
                            <g transform="translate(18 -170.08)" v:groupContext="shape" v:mID="27">
                                <title>Database Gray</title>
                                <desc>name [Container: technology] description of database</desc>
                                <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                <v:textRect width="106.3" height="54.5669" cx="53.1496" cy="814.606" />
                                <path class="st23"
                                    d="m106.28 777.33a52.652 9.8477-180 0 0-52.58-9.85h-0.07a53.71 10.083-180 0 0-53.63 9.92v54.41a53.71 10.083 0 0 0 53.63 10.08h0.08a52.652 9.8477 0 0 0 52.58-9.85z"
                                    fill="#999" />
                                <g stroke="#8b8b8b" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="st24"
                                        d="m106.28 777.33a52.652 9.8477-180 0 0-52.58-9.85h-0.07a53.71 10.083-180 0 0-53.63 9.92v54.41a53.71 10.083 0 0 0 53.63 10.08h0.08a52.652 9.8477 0 0 0 52.58-9.85l-0.01-54.71" />
                                    <path class="st24" d="m0.08 777.24a53.71 10.083 0 0 0 53.71 10.08" />
                                    <path class="st24" d="m106.3 777.48a52.652 9.8477-180 0 1-52.65 9.84" />
                                </g><text class="st2" x="41.650002" y="802.10999" fill="#ffffff"
                                    font-family="Calibri" font-size="10px" v:langID="1030">
                                    <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                    <v:tabList />name
                                    <v:newlineChar />
                                    <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                        v:langID="1033">[Container: technology]
                                        <v:newlineChar />
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="30.690001" dy="1.687em" font-size="8px"
                                        v:langID="1033">description of
                                        <v:newlineChar />
                                    </tspan>
                                    <tspan class="st4" x="38.299999" dy="1.188em" font-size="8px"
                                        v:langID="1033">database</tspan>
                                </text>
                            </g>
                            <g transform="translate(145.56 -170.08)" v:groupContext="group" v:mID="28">
                                <title>Mobile App Gray</title>
                                <g v:groupContext="group" v:mID="29">
                                    <title>Sheet.29</title>
                                    <g v:groupContext="shape" v:mID="30">
                                        <title>Container.7</title>
                                        <rect class="st25" y="767.48" width="106.3" height="74.409"
                                            rx="4.252" ry="4.252" fill="#8b8b8b" stroke="#8b8b8b"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width=".75" />
                                    </g>
                                    <g transform="rotate(-90 35.781 776.26)" v:groupContext="shape" v:mID="31">
                                        <title>Sheet.31</title>
                                        <path class="st26" d="m0 841.89h14.71" stroke="#999"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <g transform="translate(1.9549 -33.341)" v:groupContext="shape" v:mID="32">
                                        <title>Sheet.32</title>
                                        <circle class="st27" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#999" />
                                    </g>
                                    <g transform="translate(9.2126 -2.7638)" v:groupContext="shape" v:mID="33">
                                        <title>Container</title>
                                        <rect class="st22" y="773.01" width="87.874" height="68.882"
                                            rx="1.4173" ry="1.4173" fill="#999" stroke="#8b8b8b"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </g>
                                <g v:groupContext="shape" v:mID="34">
                                    <title>Sheet.34</title>
                                    <desc>name [Container: technology] description of container</desc>
                                    <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                    <v:textRect width="80.79" height="62.3622" cx="53.1496" cy="805.039" />
                                    <text class="st2" x="41.650002" y="790.34003" fill="#ffffff"
                                        font-family="Calibri" font-size="10px" v:langID="1030">
                                        <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                        <v:tabList />name
                                        <v:newlineChar />
                                        <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                            v:langID="1033">[Container: technology]
                                            <v:newlineChar />
                                            <v:newlineChar />
                                        </tspan>
                                        <tspan class="st4" x="30.690001" dy="1.687em" font-size="8px"
                                            v:langID="1033">description of
                                            <v:newlineChar />
                                            <v:paragraph v:horizAlign="1" />
                                        </tspan>
                                        <tspan class="st4" x="37.59" dy="1.6em" font-size="8px"
                                            v:langID="1033">container</tspan>
                                    </text>
                                </g>
                            </g>
                            <g transform="translate(273.12 -170.08)" v:groupContext="group" v:mID="35">
                                <title>Web browser Gray</title>
                                <g v:groupContext="group" v:mID="36">
                                    <title>Sheet.36</title>
                                    <g v:groupContext="shape" v:mID="37">
                                        <title>Container.7</title>
                                        <rect class="st25" y="767.48" width="106.3" height="74.409"
                                            rx="1.4173" ry="1.4173" fill="#8b8b8b" stroke="#8b8b8b"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width=".75" />
                                    </g>
                                    <g transform="translate(3.47 -66.614)" v:groupContext="shape" v:mID="38">
                                        <title>Sheet.38</title>
                                        <circle class="st27" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#999" />
                                    </g>
                                    <g transform="translate(2.126 -2.126)" v:groupContext="shape" v:mID="39">
                                        <title>Container</title>
                                        <rect class="st22" y="778.82" width="102.05" height="63.071"
                                            rx="1.4173" ry="1.4173" fill="#999" stroke="#8b8b8b"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <g transform="translate(10.948 -66.614)" v:groupContext="shape" v:mID="40">
                                        <title>Sheet.40</title>
                                        <circle class="st27" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#999" />
                                    </g>
                                    <g transform="translate(18.425 -66.614)" v:groupContext="shape" v:mID="41">
                                        <title>Sheet.41</title>
                                        <circle class="st27" cx="3.0301" cy="838.86" r="3.0301"
                                            fill="#999" />
                                    </g>
                                    <g transform="translate(26.169 -66.609)" v:groupContext="shape" v:mID="42">
                                        <title>Container.14</title>
                                        <rect class="st28" y="835.82" width="77.862" height="6.07"
                                            rx="2.8346" ry="2.8346" fill="#999" stroke="#8b8b8b"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width=".28346" />
                                    </g>
                                </g>
                                <g v:groupContext="shape" v:mID="43">
                                    <title>Sheet.43</title>
                                    <desc>name [Container: technology] description of container</desc>
                                    <v:textBlock v:margins="rect(4,4,4,4)" v:tabSpace="42.5197" />
                                    <v:textRect width="100.63" height="61.6535" cx="53.1496" cy="808.228" />
                                    <text class="st2" x="41.650002" y="793.53003" fill="#ffffff"
                                        font-family="Calibri" font-size="10px" v:langID="1030">
                                        <v:paragraph v:horizAlign="1" v:spLine="-1" />
                                        <v:tabList />name
                                        <v:newlineChar />
                                        <tspan class="st3" x="24.290001" dy="1.1670001em" font-size="5.9999px"
                                            v:langID="1033">[Container: technology]
                                            <v:newlineChar />
                                            <v:newlineChar />
                                        </tspan>
                                        <tspan class="st4" x="30.68" dy="1.687em" font-size="8px"
                                            v:langID="1033">description of
                                            <v:newlineChar />
                                            <v:paragraph v:horizAlign="1" />
                                        </tspan>
                                        <tspan class="st4" x="37.59" dy="1.6em" font-size="8px"
                                            v:langID="1033">container</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg> -->
                    </div>
                </div>
                <svg id="drawing-area" class="drawing-area left" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:xhtml="http://www.w3.org/1999/xhtml">
                </svg>

                <div class="sidebar-right left">
                    <div class="fill-section right-sidebar-item">
                        <h3 class="right-sidebar-item-header">Fill Color</h3>
                        <input type="checkbox" checked="false" style="margin: 0px 6px 0px 0px;"
                            id="fill-status">
                        <input type="color" name="color-picker" id="color-picker">
                        <label for="opacity">Opacity</label>
                        <input type="number" id="opacity" name="opacity" min="0" max="100"
                            value="100">
                    </div>
                    <div class="stroke-section right-sidebar-item">
                        <h3 class="right-sidebar-item-header">Line</h3>
                        <input type="checkbox" style="margin: 0px 6px 0px 0px;" id="line-status">
                        <span>Line: </span>
                        <select name=" line-type" id="line-type">
                            <option value="dashed">Dashed</option>
                            <option value="dotted">Dotted</option>
                            <option value="dotted">Continuous</option>
                        </select>
                        <input type="number" id="line-width" name="line-width" min="1" value="1"
                            step="0.2">
                        <input type="color" name="stroke-color-picker" id="stroke-color-picker">
                    </div>
                    <div class="position-section right-sidebar-item">
                        <h3 class="right-sidebar-item-header">Position</h3>
                        <label for="left">Left</label>
                        <input type="number" id="left" name="left" value="0" step="1">
                        <label for="top">Top</label>
                        <input type="number" id="top" name="top" value="0" step="1">
                    </div>

                    <div class="size-section right-sidebar-item">
                        <h3 class="right-sidebar-item-header">Size</h3>

                        <label for="width">ScaleX</label>
                        <input type="number" id="width" name="width" value="0" step="0.1">

                        <label for="height">ScaleY</label>
                        <input type="number" id="height" name="height" value="0" step="0.1">
                    </div>

                    <div class="rotation-section right-sidebar-item">
                        <h3 class="right-sidebar-item-header">Rotation</h3>
                        <input type="number" id="rotate" name="rotate" value="0">
                    </div>

                    <div class="font-section right-sidebar-item">
                        <h3 class="right-sidebar-item-header"> Font</h3>
                        <select name="fonts" id="fonts">
                            <option value="default" class="font-default">Default</option>
                            <option value="open-sans" class="font-open-sans">Open Sans</option>
                            <option value="lato" class="font-lato">Lato</option>
                            <option value="times-new-roman" class="font-times-new-roman">Times New Roman</option>
                            <option value="vollkorn" class="font-vollkorn">Vollkorn</option>
                            <option value="chivo" class="font-chivo">Chivo</option>
                            <option value="roboto" class="font-roboto"> Roboto </option>
                            <option value="source Sans Pro" class="font-source-sans-pro">Source Sans Pro</option>
                            <option value="montserrat" class="font-montserrat">Montserrat</option>
                            <option value="lora" class="font-lora">Lora</option>
                            <option value="prompt" class="font-prompt">Prompt</option>
                        </select>
                        <button id="bold-btn" class="btn">
                            <span class="text-bold">B</span>
                        </button>
                        <button id="italics-btn" class="btn">
                            <span class="text-italics">I</span>
                        </button>
                        <button id="underline-btn" class="btn">
                            <span class="text-underline">U</span>
                        </button>
                        <div>
                            <span>Size</span>
                            <input type="number" name="font-size" id="font-size">
                            <span>Color</span>
                            <input type="color" name="font-color" id="font-color">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('board/js/constants.js') }}"></script>
    <script src="{{ asset('board/js/utils/selectors.js') }}"></script>
    <script src="{{ asset('board/js/modal.js') }}"></script>
    <!-- Shape Related JS files -->
    <script src="{{ asset('board/js/shapeFiles/ShapeFile.js') }}"></script>
    <script src="{{ asset('board/js/shapeFiles/ConnectorFile.js') }}"></script>

    <script src="{{ asset('board/js/utils/utils.js') }}"></script>
    <script src="{{ asset('board/js/connectorEventListener.js') }}"></script>
    <!-- Delete Copy Event Handler -->
    <script src="{{ asset('board/js/eventHandlers/keyboard.js') }}"></script>
    <!-- Export , Saving State Event Handler -->
    <script src="{{ asset('board/js/eventHandlers/save.js') }}"></script>
    <script src="{{ asset('board/js/resize.js') }}"></script>

    <script src="{{ asset('board/js/app.js')}}" type="module"></script>

    <script src="{{ asset('board/js/leftSideBar.js') }}"></script>
    <script src="{{ asset('board/js/shapeControls.js') }}"></script>
    <script src="{{ asset('board/js/eventHandlers/shapeEventListener.js') }}"></script>
    <script src="{{ asset('board/js/rightSideBar.js') }}"></script>
    <script src="{{ asset('board/js/eventHandlers/drag.js') }}"></script>
</body>

</html>
