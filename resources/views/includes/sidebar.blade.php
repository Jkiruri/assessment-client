<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">SLG</li>
            <li><a class="" href="{{ url('/') }}" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.8877 10.8967C19.2827 10.7007 20.3567 9.50467 20.3597 8.05567C20.3597 6.62767 19.3187 5.44367 17.9537 5.21967"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M19.7285 14.2503C21.0795 14.4523 22.0225 14.9253 22.0225 15.9003C22.0225 16.5713 21.5785 17.0073 20.8605 17.2813"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.8867 14.6638C8.67273 14.6638 5.92773 15.1508 5.92773 17.0958C5.92773 19.0398 8.65573 19.5408 11.8867 19.5408C15.1007 19.5408 17.8447 19.0588 17.8447 17.1128C17.8447 15.1668 15.1177 14.6638 11.8867 14.6638Z"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.8869 11.8879C13.9959 11.8879 15.7059 10.1789 15.7059 8.06888C15.7059 5.95988 13.9959 4.24988 11.8869 4.24988C9.7779 4.24988 8.0679 5.95988 8.0679 8.06888C8.0599 10.1709 9.7569 11.8809 11.8589 11.8879H11.8869Z"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M5.88509 10.8967C4.48909 10.7007 3.41609 9.50467 3.41309 8.05567C3.41309 6.62767 4.45409 5.44367 5.81909 5.21967"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.044 14.2503C2.693 14.4523 1.75 14.9253 1.75 15.9003C1.75 16.5713 2.194 17.0073 2.912 17.2813"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                    </div>
                    <span class="nav-text">Drivers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/drivers ') }}">View Drivers</a></li>
                    {{-- <li><a href="{{ url('/add-driver ') }}">Add Driver</a></li> --}}
                    

                </ul>
            </li>
            <li><a href="{{ url('/trucks') }}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Trucks</span>
                </a>
            </li>
            <li><a href="{{ url('/transanctions') }}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.986 14.0673C7.4407 14.0673 4.41309 14.6034 4.41309 16.7501C4.41309 18.8969 7.4215 19.4521 10.986 19.4521C14.5313 19.4521 17.5581 18.9152 17.5581 16.7693C17.5581 14.6234 14.5505 14.0673 10.986 14.0673Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.986 11.0054C13.3126 11.0054 15.1983 9.11881 15.1983 6.79223C15.1983 4.46564 13.3126 2.57993 10.986 2.57993C8.65944 2.57993 6.77285 4.46564 6.77285 6.79223C6.76499 9.11096 8.63849 10.9975 10.9563 11.0054H10.986Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Transanctions</span>
                </a>
            </li>

            <li><a href="{{ url('/expenses') }}" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.8381 12.7317C16.4566 12.7317 16.9757 13.2422 16.8811 13.853C16.3263 17.4463 13.2502 20.1143 9.54009 20.1143C5.43536 20.1143 2.10834 16.7873 2.10834 12.6835C2.10834 9.30245 4.67693 6.15297 7.56878 5.44087C8.19018 5.28745 8.82702 5.72455 8.82702 6.36429C8.82702 10.6987 8.97272 11.8199 9.79579 12.4297C10.6189 13.0396 11.5867 12.7317 15.8381 12.7317Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.8848 9.1223C19.934 6.33756 16.5134 1.84879 12.345 1.92599C12.0208 1.93178 11.7612 2.20195 11.7468 2.5252C11.6416 4.81493 11.7834 7.78204 11.8626 9.12713C11.8867 9.5459 12.2157 9.87493 12.6335 9.89906C14.0162 9.97818 17.0914 10.0862 19.3483 9.74467C19.6552 9.69835 19.88 9.43204 19.8848 9.1223Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Expenses </span>
                </a>
                
            </li>
            <li><a href="{{ url('/add-expenses') }}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.64111 13.5497L9.38482 9.9837L12.5145 12.4421L15.1995 8.97684" stroke="#888888"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <ellipse cx="18.3291" cy="3.85021" rx="1.76201" ry="1.76201" stroke="#888888"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.6808 2.86012H7.01867C4.25818 2.86012 2.54651 4.81512 2.54651 7.57561V14.9845C2.54651 17.7449 4.22462 19.6915 7.01867 19.6915H14.9058C17.6663 19.6915 19.3779 17.7449 19.3779 14.9845V8.53213"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Add Expense</span>
                </a>
            </li>
          

          
    </div>
</div>
