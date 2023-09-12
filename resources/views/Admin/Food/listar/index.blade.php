@extends('layouts.marge.admin')
@section('conteudo')
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-0 pb-0 flex-wrap">
                    <h4 class="mb-0">Food Menu</h4>
                    <ul class="nav nav-tabs food-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">All Means</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Breakefast</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Lunch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sanck-tab" data-bs-toggle="tab" data-bs-target="#sanck-tab-pane"
                                type="button" role="tab" aria-controls="sanck-tab-pane"
                                aria-selected="false">Snack</button>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-details">
                                    <tbody>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic1.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5><a href="javascript:void(0);">Beef Steak with Fried Potato</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp  btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic2.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class="badge badge-sm badge-primary mb-2">Breakfast</span>
                                                        <h5><a href="javascript:void(0);">Pancake with Honey</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.400</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">36%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light " data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic3.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5><a href="javascript:void(0);">Japanese Beef Ramen</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.8</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">20%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic4.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5><a href="javascript:void(0);">Mixed Salad</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic5.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class="badge badge-sm badge-primary mb-2">Snack</span>
                                                        <h5><a href="javascript:void(0);">Beef Meatball with Vegetable</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">5.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">46%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-details">
                                    <tbody>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic1.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class="badge badge-sm badge-primary mb-2">Breakfast</span>
                                                        </button>
                                                        <h5><a href="javascript:void(0);">Beef Steak with Fried Potato</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic2.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class="badge badge-sm badge-primary mb-2">Breakfast</span>
                                                        <h5><a href="javascript:void(0);">Pancake with Honey</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.400</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">36%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic3.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Breakfast</span></button>
                                                        <h5><a href="javascript:void(0);">Japanese Beef Ramen</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.8</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">20%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic4.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Breakfast</span></button>
                                                        <h5><a href="javascript:void(0);">Mixed Salad</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic5.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Breakfast</span></button>
                                                        <h5><a href="javascript:void(0);">Beef Meatball with Vegetable</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">5.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">46%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-details">
                                    <tbody>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic1.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class="badge badge-sm badge-primary mb-3">Lunch
                                                        </span>
                                                        <h5><a href="javascript:void(0);"> Beef Steak with Fried Potato</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic2.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5>Pancake with Honey</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.400</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">36%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic3.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5><a href="javascript:void(0);">Japanese Beef Ramen</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.8</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">20%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic4.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5><a href="javascript:void(0);">Mixed Salad</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic5.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class=" badge badge-sm badge-primary mb-2">Lunch</span>
                                                        <h5><a href="javascript:void(0);">Beef Meatball with Vegetable</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">5.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">46%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="sanck-tab-pane" role="tabpanel" aria-labelledby="sanck-tab"
                            tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-details">
                                    <tbody>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic1.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span class="badge badge-sm badge-primary mb-2">Snack</span>
                                                        </button>
                                                        <h5><a href="javascript:void(0);">Beef Steak with Fried Potato</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic2.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Snack</span></button>
                                                        <h5><a href="javascript:void(0);">Pancake with Honey</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.400</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">36%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic3.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Snack</span></button>
                                                        <h5><a href="javascript:void(0);">Japanese Beef Ramen</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.8</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">20%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic4.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Snack</span></button>
                                                        <h5><a href="javascript:void(0);">Mixed Salad</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">4.9</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.456</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">26%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td Style="width:100px;">
                                                <div class="food-menu">
                                                    <img class="me-3 rounded avatar avatar-xl"
                                                        src="/dashboard/images/food/pic5.jpg" alt="DexignZone">
                                                    <div class="food-info">
                                                        <span
                                                            class="badge badge-sm badge-primary mb-2">Snack</span></button>
                                                        <h5><a href="javascript:void(0);">Beef Meatball with Vegetable</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="food-review">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li>
                                                        <h5 class="font-w700">5.0</h5>
                                                    </li>
                                                </ul>

                                            </td>
                                            <td>
                                                <ul class="d-flex">
                                                    <li><svg class="me-3" width="62" height="53"
                                                            viewBox="0 0 62 53" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 31.7387C8 30.1102 6.20914 28.7901 4 28.7901C1.79086 28.7901 0 30.1102 0 31.7387V50.0515C0 51.6799 1.79086 53 4 53C6.20914 53 8 51.6799 8 50.0515V31.7387Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M26 21.2318C26 19.6242 24.2091 18.321 22 18.321C19.7909 18.321 18 19.6242 18 21.2318V50.0892C18 51.6968 19.7909 53 22 53C24.2091 53 26 51.6968 26 50.0892V21.2318Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M44 2.96576C44 1.32781 42.2091 0 40 0C37.7909 0 36 1.32782 36 2.96576V50.0342C36 51.6722 37.7909 53 40 53C42.2091 53 44 51.6722 44 50.0342V2.96576Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M62 26.5054C62 24.8762 60.2091 23.5556 58 23.5556C55.7909 23.5556 54 24.8762 54 26.5054V50.0502C54 51.6793 55.7909 53 58 53C60.2091 53 62 51.6793 62 50.0502V26.5054Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <h3 class="mb-0 font-w500 fs-22">1.457</h3>
                                                        <span>Total Sales</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="d-flex align-items-center">
                                                    <li><svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9411 3.05888C39.9411 1.40202 38.598 0.0588751 36.9411 0.0588751H9.94113C8.28427 0.0588751 6.94113 1.40202 6.94113 3.05888C6.94113 4.71573 8.28427 6.05888 9.94113 6.05888H33.9411V30.0589C33.9411 31.7157 35.2843 33.0589 36.9411 33.0589C38.598 33.0589 39.9411 31.7157 39.9411 30.0589V3.05888ZM5.12132 39.1213L39.0624 5.1802L34.8198 0.937555L0.87868 34.8787L5.12132 39.1213Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </li>
                                                    <li class="ms-3">
                                                        <h3 class="mb-0 font-w500 fs-22">46%</h3>
                                                        <span>Interest</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <img src="/dashboard/images/circle.svg" alt="">
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-light" data-bs-toggle="dropdown">
                                                        <svg width="24" height="6" viewBox="0 0 24 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z"
                                                                fill="#A098AE" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
