				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="{{route('home')}}">
							<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="logo">
							<img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="logo">
							<img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="logo">
						</a>
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{URL::asset('assets/images/users/profile2.png')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{Auth::user()->name}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
								<span class="text-muted app-sidebar__user-name text-sm">{{Auth::user()->user_type == 1 ? "Admin":"User"}}</span>
							</div>
						</div>
					</div>
                    @if(Auth::user()->user_type == 1)
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category mt-4">Main</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('home')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
							<span class="side-menu__label">Dashboard</span></a>
						</li>

                        <li class="slide">
                            <a class="side-menu__item" href="{{route('fullz.ssn')}}">
                                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"></path></svg>
                                <span class="side-menu__label">SSN</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" href="{{route('fullz.ssn.dl')}}">
                                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"></path></svg>
                                <span class="side-menu__label">SS + DL</span></a>
                        </li>
						<li class="side-item side-item-category">Transactions</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
                                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
							<span class="side-menu__label">Transaction</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li><a href="{{route('transactions')}}" class="slide-item">Transactions</a></li>
								<li><a href="{{route('sold.lines')}}" class="slide-item">Sold Lines</a></li>

							</ul>
						</li>
{{--                        <li class="slide">--}}
{{--                            <a class="side-menu__item" href="{{route('settings')}}">--}}
{{--                                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z"></path></svg>--}}
{{--                                <span class="side-menu__label">Settings</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
					</ul>
                    @endif

                    @if(Auth::user()->user_type == 2)
                        <ul class="side-menu app-sidebar3">
                            <li class="side-item side-item-category mt-4">Main</li>
                            <li class="slide">
{{--                                <a class="side-menu__item"  href="{{route('user.dashboard')}}">--}}
{{--                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>--}}
{{--                                    <span class="side-menu__label">Dashboard</span></a>--}}
{{--                            </li>--}}
                            <li class="slide">
                                <a class="side-menu__item" href="{{route('user.fullz.ssn')}}">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"></path></svg>
                                    <span class="side-menu__label">SSN</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" href="{{route('user.fullz.ssn.dl')}}">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"></path></svg>
                                    <span class="side-menu__label">SS + DL</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" href="{{route('add.funds')}}">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"></path></svg>
                                    <span class="side-menu__label">Add Funds</span></a>
                            </li>
                            <li class="side-item side-item-category">Transactions</li>
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
                                    <span class="side-menu__label">Transaction</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu ">
                                    <li><a href="{{route('order.details')}}" class="slide-item">Order Details</a></li>
                                    <li><a href="{{route('funds.history')}}" class="slide-item">Funds History</a></li>

                                </ul>
                            </li>

                        </ul>
                    @endif
				</aside>
				<!--aside closed-->
