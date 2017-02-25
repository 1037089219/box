<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>个人资料</title>
    <link rel="stylesheet" type="text/css" href="/css/resect.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/udacity_overrides.css"/>
    <link rel="stylesheet" type="text/css" href="/css/vendor.80ad5aba.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main.3f4e650d.css"/>
    <!-- 		<script async="" src="//www.google-analytics.com/analytics.js"></script>
            <script src="js/amplitude-3.4.0-min.gz.js" type="text/javascript" charset="utf-8"></script>
            <script src="js/analytics.min.js" type="text/javascript" charset="utf-8"></script>
            <script src="js/tracker.js" type="text/javascript" charset="utf-8"></script> -->
</head>
<body>
<!-- 左侧固定导航栏 -->
<div class="navl">
    <div class="logo">
        <a href="/site/index"></a>
    </div>
    <ul class="nav-top-list">
        <a href="/my/practice">
            <li class="list">
                <div></div>
                <span>我的训练</span>
            </li>
        </a>
        <a href="/my/all-practice">
            <li class="list">
                <div></div>
                <span>所有训练</span>
            </li>
        </a>
        <li class="list">
            <div></div>
            <span id="nav-in-default">个人信息</span>
        </li>
    </ul>
    <ul class="nav-bottom-list">
        <a href="/my/training">
            <li class="list">
                <div></div>
                <span>设置</span>
            </li>
        </a>
        <a href="/site/logout">
        <li class="list">
            <div></div>
            <span>登出</span>
        </li>
        </a>
    </ul>
</div>



	 <div id="udacity" class="ng-scope">
		 <!-- ngInclude: 'app/profiles_v3/udacity_navbar.html' -->
		 <div ng-hide="$state.is('udacity.user.edit')" ng-include="" class="ng-scope ng-hide" aria-hidden="true">
			 <header class="ng-scope">

				 <div class="contain clear">
					 <span translate="Professional Profile" class="ng-scope">职业资料</span>
					 <!-- ngIf: !getCurrentUser() -->
					 <!-- ngIf: !getCurrentUser() -->
					 <nav class="main udacity-nav">
						 <ul class="main_nav">


							 <li class="free_courses_link"><a href="#" translate="Catalog" class="ng-scope">目录</a></li>
							 <!-- ngIf: getCurrentUser() -->
							 <li class="student_dropdown hidden-xs ng-scope" ng-if="getCurrentUser()"> <a href="#" class="ng-binding">畅 阿</a>

							 </li>

						 </ul>
						 <a class="clickable nav_toggle" navbar-toggle=""> <span class="bar bar_top"></span> <span class="bar bar_mid"></span> <span class="bar bar_bottom"></span> </a>
					 </nav>
				 </div>
			 </header>
		 </div>

        <!-- uiView:  -->
        <div ui-view="" class="ng-scope">
            <!-- uiView:  -->
            <div ui-view="" class="ng-scope">
                <div class="uda-profile ng-scope">
                 
                    <div class="container edit-state" ng-class="{'edit-state': $state.is('udacity.user.edit')}">
                        <div class="row text-center">
                            <div class="main-profile-wrapper">
                                <!-- ngIf: $state.is('udacity.user.edit') -->
                                <div class="sidebar ng-scope" ng-if="$state.is('udacity.user.edit')">
                                    <!-- ngInclude: 'app/profiles_v3/edit/sidebar.html' -->
                                    <div ng-include="''" class="ng-scope">
                                        <div class="sidebar-module ng-scope">
                                            <h6 class="all-caps ng-binding"> 20% <span translate="complete" class="ng-scope">完成</span> </h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only ng-binding">20% <span translate="complete" class="ng-scope">完成</span></span>
                                                </div>
                                            </div>
                                            <!-- ngIf: getNextAction() -->
                                            <div ng-if="getNextAction()" class="ng-scope"> <a class="step-text visible-xs visible-sm hidden-md hidden-lg ng-scope" ng-click="doNextAction()" translate="Avatar image" tabindex="0">头像</a> <span class="step-text hidden-xs hidden-sm visible-md visible-lg"> <span translate="Upload an" class="ng-scope">上传</span>												<a ng-click="doNextAction()" translate="avatar image" class="ng-scope" tabindex="0">头像</a> </span>
                                                <!-- ngIf: !getNextAction() -->
                                            </div>
                                            <!-- end ngIf: getNextAction() -->
                                        </div>
                                        <div class="sidebar-module ng-scope" ng-class="{'form-is-saving': formIsSaving &amp;&amp; editingSection === 'recruitment-access'}">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="onoffswitch" ng-class="{'checked': profileObject.user.show_jobs}" style="position: relative"> <input ng-model="profileObject.user.show_jobs" ng-true-value="true" ng-false-value="false" ng-change="toggleProfilePrivacy(profileObject.user.show_jobs)" name="onoffswitch" class="onoffswitch-checkbox ng-pristine ng-untouched ng-valid"
                                                                                                                                                                         id="myonoffswitch" ng-disabled="changingRecruiterAccessTo !== null" tabindex="0" aria-checked="false" aria-invalid="false" aria-disabled="false" type="checkbox"> <label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
                                                            <div style="display: inline-block; position: absolute">
                                                                <div ng-show="job_status.job_status_done &amp;&amp; profileObject.user.actively_looking_for_job == 'notlooking'" style="visibility: visible; display: block; top: 14px; left: -60px; width: 400px; position: absolute" class="top tooltip-info fade tooltip in increased-padding job-tooltip ng-hide"
                                                                     aria-hidden="true">
                                                                    <div class="tip"></div>
                                                                    <div class="tooltip-inner ng-binding">
                                                                        <!-- ngIf: profileObject.user.show_jobs -->
                                                                        <!-- ngIf: !profileObject.user.show_jobs --><span ng-if="!profileObject.user.show_jobs" translate="OK! If you change your mind, enable recruiter access to allow employers to search and find you." class="ng-scope">OK! If you change your mind, enable recruiter access to allow employers to search and find you.</span>
                                                                        <!-- end ngIf: !profileObject.user.show_jobs --><span class="tooltip-button" ng-click="job_status.job_status_done=false" tabindex="0">Got it</span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="all-caps" style="display: inline-block">&nbsp;&nbsp;<span translate="Recruiter Access" class="ng-scope">招聘人员准入</span>&nbsp;</h6>
                                                        <div style="display: inline-block; position: relative">
                                                            <div ng-show="showTriggerInfo" style="visibility: visible; display: block; top: -122px; left: -113px; width: 240px; position: absolute" class="top tooltip-info fade tooltip in increased-padding ng-hide" aria-hidden="true">
                                                                <div class="tooltip-arrow"></div>
                                                                <!-- ngIf: profileObject.user.show_jobs -->
                                                                <!-- ngIf: !profileObject.user.show_jobs -->
                                                                <div class="tooltip-inner ng-binding ng-scope" ng-if="!profileObject.user.show_jobs"> <span translate="Your profile is currently private." class="ng-scope">你的个人资料现在已进行隐私保护。</span><br> <span translate="Enable to share and allow employers to view your profile." class="ng-scope">确保将你的个人资料分享给雇主并允许其浏览。</span> </div>
                                                                <!-- end ngIf: !profileObject.user.show_jobs -->
                                                            </div> <img ng-mouseover="showTriggerInfo=true" ng-mouseleave="showTriggerInfo=false" src="img/question-circle.jpg" style="position: relative; top: -1px" height="14" width="14"> </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Tour Step 5 --><span id="tour-recruiter-access" class="anchor"></span>
                                            <div class="popover onboard-popover in bottom ng-hide" style="top: 210px; left: -33px" ng-show="udacityTour.step === 5" aria-hidden="true">
                                                <div class="arrow"></div>
                                                <div class="popover-content">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="/images/p-tour-05_recruit-toggle.svg" width="100%"></td>
                                                            <td>
                                                                <!-- ngIf: !profileObject.user.show_jobs --><span ng-if="!profileObject.user.show_jobs" translate="Your profile is currently private. Enable Recruiter Access to share your profile and allow employers to discover you!" class="ng-scope">你的个人资料当前已进行隐私保护。确保你的招聘者可以获取你的个人资料的权限，允许你的雇主发现你！</span>
                                                                <!-- end ngIf: !profileObject.user.show_jobs -->
                                                                <!-- ngIf: profileObject.user.show_jobs -->
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="popover-btn ng-scope" ng-click="switchTourStep(null)" translate="Got it" tabindex="0">明白</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-module profile-actions ng-scope">
                                            <!-- ngIf: profileObject.user.show_jobs -->
                                            <div class="dropdown">
                                                <ul class="dropdown-menu" id="shareDropdown">
                                                    <li>
                                                        <a analytics-on="" analytics-event="click" analytics-category="share-link" analytics-label="copy-share-link" ng-click="copyShareLink()" tabindex="0">
                                                            <div class="share-icon link-icon"></div> <span translate="Copy Link" class="ng-scope">复制链接</span> </a>
                                                    </li>



                                                </ul>
                                            </div>
                                            <!-- ngIf: profileObject.user.show_jobs --><a class="all-caps hidden-xs ng-scope" ng-click="toggleUdacityTour()" translate="Guide" tabindex="0">新手指引</a>
                                            <hr class="hidden-xs"> <a class="all-caps ng-scope" href="#" translate="Career Resource Center">职业资源中心</a>
                                            <!-- Conditional job help -->
                                            <!-- ngIf: profileObject.user.actively_looking_for_job == 'looking' && (profileObject.user.job_seeker_status == 'updating' || profileObject.user.job_seeker_status == 'searching' || profileObject.user.job_seeker_status == 'applying' || profileObject.user.job_seeker_status == 'interviewing') -->
                                            <div class="job-recommended ng-scope" ng-if="profileObject.user.actively_looking_for_job == 'looking' &amp;&amp; (profileObject.user.job_seeker_status == 'updating' || profileObject.user.job_seeker_status == 'searching' || profileObject.user.job_seeker_status == 'applying' || profileObject.user.job_seeker_status == 'interviewing')">
                                                <strong> <span class="all-caps ng-scope" translate="Recommended for you">Recommended for you</span> <div style="display: inline-block; position: relative"> <div ng-show="job_status.job_status_done &amp;&amp; profileObject.user.actively_looking_for_job == 'looking'" style="visibility: visible; display: block; top: 14px; left: -175px; width: 400px; position: absolute" class="top tooltip-info fade tooltip in increased-padding job-tooltip ng-hide" aria-hidden="true"> <div class="tip"></div> <div class="tooltip-inner ng-binding"> <span translate="We've recommended resources in your sidebar for updating your online presence &amp; researching the job market. Feel free to reach out to us directly at " class="ng-scope">We've recommended resources in your sidebar for updating your online presence &amp; researching the job market. Feel free to reach out to us directly at</span> <a href="mailto:career-support@udacity.com">career-support@udacity.com</a> <span translate="if you have questions." class="ng-scope">if you have questions.</span> <span class="tooltip-button" ng-click="job_status.job_status_done=false" tabindex="0">Got it</span> </div> </div> </div> </strong>
                                                <!-- ngIf: profileObject.user.job_seeker_status == 'updating' -->
                                                <!-- ngIf: profileObject.user.job_seeker_status == 'searching' -->
                                                <!-- ngIf: profileObject.user.job_seeker_status == 'applying' -->
                                                <!-- ngIf: profileObject.user.job_seeker_status == 'interviewing' --><span ng-if="profileObject.user.job_seeker_status == 'interviewing'" class="ng-scope"> <a target="_blank" href="#" class="ng-scope"></a> </span>
                                                <!-- end ngIf: profileObject.user.job_seeker_status == 'interviewing' -->
                                            </div>
                                            <!-- end ngIf: profileObject.user.actively_looking_for_job == 'looking' && (profileObject.user.job_seeker_status == 'updating' || profileObject.user.job_seeker_status == 'searching' || profileObject.user.job_seeker_status == 'applying' || profileObject.user.job_seeker_status == 'interviewing') -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end ngIf: $state.is('udacity.user.edit') -->
                                <div class="profile-contents">
                                    <section class="ui_block">
                                        <!-- Basic Info -->
                                        <div id="basic-info" class="contain visible profile-section" ng-class="{'edit-section': editingSection === 'basic-info-anchor', 'form-is-saving': formIsSaving &amp;&amp; editingSection === 'basic-info-anchor'}">
                                            <div class="loading-image-container">
                                                <div class="loading-image spin"></div>
                                            </div> <span id="basic-info-anchor" class="anchor"></span>
                                            <!-- ngIf: editingSection !== 'basic-info-anchor' -->
                                            <!-- ngInclude: '' -->
                                            <div ng-if="editingSection !== 'basic-info-anchor'" ng-include="''" class="ng-scope">
                                                <a ng-show="$state.is('udacity.user.edit') &amp;&amp; editingSection !== 'basic-info-anchor'" class="edit-toggle ng-scope" ng-click="toggleEdit('basic-info-anchor')" tabindex="1" onkeydown="if (event.keyCode == 13) click()" onclick="this.blur()"
                                                   aria-hidden="false"></a>
                                                <div class="profile-photo ng-scope">
                                                    <div class="profile-photo-container" ng-style="{'background-image': 'url( \'' )' }" alt="用户个人头像" style="background-image: url(&quot;img/avatar_large.svg&quot;);"></div>
                                                </div>
                                                <div class="row-gap-sm ng-scope"></div>
                                                <div class="row text-center ng-scope">
                                                    <h2 class="user-name ng-binding"> 畅 阿 </h2> </div>
                                                <div class="row text-center ng-scope">
                                                    <!-- ngIf: $state.is('udacity.user.edit') && !user.location.city --><span ng-if="$state.is('udacity.user.edit') &amp;&amp; !user.location.city" class="incomplete-text ng-scope"> <img style="opacity: 0.35" src="img/icon-location.svg" width="16px"> <span translate="Where are you located?" class="ng-scope">你位于哪里?</span>													</span>
                                                    <!-- end ngIf: $state.is('udacity.user.edit') && !user.location.city -->
                                                    <!-- ngIf: user.location.city -->
                                                    <div class="row-gap-sm"></div>
                                                </div>
                                                <div class="row row-gap-sm text-center ng-scope">
                                                    <!-- ngIf: user.resume -->
                                                    <!-- ngIf: user.linked_accounts.linkedin -->
                                                    <!-- ngIf: user.linked_accounts.github -->
                                                    <!-- ngIf: user.linked_accounts.kaggle -->
                                                    <!-- ngIf: user.linked_accounts.stack_overflow -->
                                                    <!-- ngIf: user.linked_accounts.personal_site -->
                                                </div>
                                                <!-- ngIf: $state.is('udacity.user.edit') && profileObject.user.missing_links.length > 0 -->
                                                <div class="row row-gap-sm text-center all-caps incomplete-text incomplete-links ng-scope" ng-if="$state.is('udacity.user.edit') &amp;&amp; profileObject.user.missing_links.length > 0">
                                                    <!-- ngIf: profileObject.user.missing_links.length > 0 --><span translate="Add" ng-if="profileObject.user.missing_links.length > 0" class="ng-scope">添加</span>
                                                    <!-- end ngIf: profileObject.user.missing_links.length > 0 -->
                                                    <!-- ngRepeat: link_name in profileObject.user.missing_links --><span class="repeating-text ng-scope" ng-repeat="link_name in profileObject.user.missing_links"> <!-- ngIf: $index === profileObject.user.missing_links.length-1 && profileObject.user.missing_links.length > 1 --> <span translate="Resume" class="ng-scope">简历</span>
													<span
                                                        class="trailing-comma">, </span>
														</span>

														<span
                                                            class="trailing-comma"></span>
                                                    </span>
                                                    <!-- end ngRepeat: link_name in profileObject.user.missing_links --><span class="repeating-text ng-scope" ng-repeat="link_name in profileObject.user.missing_links"> <!-- ngIf: $index === profileObject.user.missing_links.length-1 && profileObject.user.missing_links.length > 1 --> <span translate="GitHub" class="ng-scope">  </span>
															<span
                                                                class="trailing-comma">, </span>
																</span>
                                                    <!-- end ngRepeat: link_name in profileObject.user.missing_links --><span class="repeating-text ng-scope" ng-repeat="link_name in profileObject.user.missing_links"> <!-- ngIf: $index === profileObject.user.missing_links.length-1 && profileObject.user.missing_links.length > 1 --> <span translate="Stack Overflow" class="ng-scope"></span>
																<span
                                                                    class="trailing-comma">, </span>
																	</span>
                                                    <!-- end ngRepeat: link_name in profileObject.user.missing_links --><span class="repeating-text ng-scope" ng-repeat="link_name in profileObject.user.missing_links"> <!-- ngIf: $index === profileObject.user.missing_links.length-1 && profileObject.user.missing_links.length > 1 --><span ng-if="$index === profileObject.user.missing_links.length-1 &amp;&amp; profileObject.user.missing_links.length > 1" class="ng-scope"> <span translate="Or" class="ng-scope"></span>																	</span>
                                                        <!-- end ngIf: $index === profileObject.user.missing_links.length-1 && profileObject.user.missing_links.length > 1 --><span translate="Personal Site" class="ng-scope"></span><span class="trailing-comma"> </span> </span>
                                                    <!-- end ngRepeat: link_name in profileObject.user.missing_links -->
                                                </div>
                                                <!-- end ngIf: $state.is('udacity.user.edit') && profileObject.user.missing_links.length > 0 -->
                                                <!-- ngIf: (user.credentials | filter:{'hidden': false}).length > 0 || user.reviewer_badges.length > 0 || user.team_guide || user.top_forum_contributor_badge || user.forum_mentor_badge || user.github_badge || user.stackoverflow_badge -->
                                                <div class="row ng-scope" style="margin-bottom: 10px" ng-if="(user.credentials | filter:{'hidden': false}).length > 0 || user.reviewer_badges.length > 0 || user.team_guide || user.top_forum_contributor_badge || user.forum_mentor_badge || user.github_badge || user.stackoverflow_badge">
                                                    <table class="badges">
                                                        <tbody>
                                                        <!-- ngIf: (user.credentials | filter:{'hidden': false}).length > 0 -->
                                                        <tr ng-if="(user.credentials | filter:{'hidden': false}).length > 0" class="nanodegree-titles ng-scope">
                                                            <td class="nanodegree-icon"><img src="img/icon-nanodegree.svg"></td>
                                                            <td>
                                                                <!-- ngRepeat: credential in user.credentials | filter:{'hidden': false} --><span class="repeating-text ng-scope" ng-repeat="credential in user.credentials | filter:{'hidden': false}"> <span translate="Front-End Web Developer" class="ng-scope">前端工程师</span>
                                                                    <!-- ngIf: !credential.complete --><span ng-if="!credential.complete" class="ng-scope"> (<span translate="in progress" class="ng-scope">进行中</span>)</span>
                                                                    <!-- end ngIf: !credential.complete --><span class="trailing-comma">,</span> </span>
                                                                <!-- end ngRepeat: credential in user.credentials | filter:{'hidden': false} -->
                                                            </td>
                                                        </tr>
                                                        <!-- end ngIf: (user.credentials | filter:{'hidden': false}).length > 0 -->
                                                        <!-- ngRepeat: badge in user.reviewer_badges -->
                                                        <!-- ngIf: user.team_guide -->
                                                        <!-- ngIf: user.top_forum_contributor_badge -->
                                                        <!-- ngIf: user.forum_mentor_badge -->
                                                        <!-- ngIf: user.stack_overflow_badge -->
                                                        <!-- ngIf: user.github_badge -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end ngIf: (user.credentials | filter:{'hidden': false}).length > 0 || user.reviewer_badges.length > 0 || user.team_guide || user.top_forum_contributor_badge || user.forum_mentor_badge || user.github_badge || user.stackoverflow_badge -->
                                                <!-- ngIf: (user.current_position && user.current_employer) || user.common_job_preferences.length > 0 -->
                                                <div class="row ng-scope">
                                                    <p class="last-active ng-binding"><span translate="Last active" class="ng-scope">最近活跃时间</span>: 几秒前 </p>
                                                </div>
                                            </div>
                                            <!-- end ngIf: editingSection !== 'basic-info-anchor' -->
                                            <!-- ngIf: editingSection === 'basic-info-anchor' -->
                                        </div>
                                    </section>
                                    <section class="ui_block">
                                        <!-- Recruitment Info -->
                                        <div id="recruitment-info" class="contain visible profile-section" ng-class="{'edit-section': editingSection === 'recruitment-anchor', 'form-is-saving': formIsSaving &amp;&amp; editingSection === 'recruitment-anchor'}">
                                            <div class="loading-image-container">
                                                <div class="loading-image spin"></div>
                                            </div> <span id="recruitment-enabled" class="anchor"></span>
                                            <!-- style on this section to keep consistent with that underline above -->
                                            <!-- ngIf: editingSection !== 'recruitment-anchor' -->
                                            <!-- ngInclude: 'app/profiles_v3/view/view_recruitment_info.html' -->
                                            <div ng-if="editingSection !== 'recruitment-anchor'" ng-include="'app/profiles_v3/view/view_recruitment_info.html'" class="ng-scope">
                                                <a ng-show="$state.is('udacity.user.edit') &amp;&amp; editingSection !== 'recruitment-anchor'" class="edit-toggle ng-scope" ng-click="toggleEdit('recruitment-anchor')" tabindex="2" onkeydown="if (event.keyCode == 13) click()" onclick="this.blur()"
                                                   aria-hidden="false"></a> <span id="tour-recruitment" class="anchor ng-scope"></span>
                                                <!-- ngIf: !(user.profile_questions.length > 0 || user.preferred_employment_types.length > 0 || user.relocate_within_country || user.relocate_international || user.will_work_remote === 'yes') -->
                                                <div class="row row-gap-sm ng-scope" ng-if="!(user.profile_questions.length > 0 || user.preferred_employment_types.length > 0 || user.relocate_within_country || user.relocate_international || user.will_work_remote === 'yes')">
                                                    <p class="semi-bold ng-scope" translate="Looking for a job? Complete your recruitment information.">正在寻找工作机会? 完成你的个人应聘信息。</p>
                                                </div>
                                                <!-- end ngIf: !(user.profile_questions.length > 0 || user.preferred_employment_types.length > 0 || user.relocate_within_country || user.relocate_international || user.will_work_remote === 'yes') -->
                                                <!-- ngIf: $state.is('udacity.user.edit') && user.profile_questions.length === 0 -->
                                                <div class="row row-gap-sm ng-scope" ng-if="$state.is('udacity.user.edit') &amp;&amp; user.profile_questions.length === 0">
                                                    <div class="col-xs-12 no-padding">
                                                        <p class="semi-bold incomplete-text ng-scope" translate="Describe a time you experienced a challenge while building a product/project and how you overcame it.">描述你在开发一个产品或项目时经历的挑战，以及你是如何克服的。</p>
                                                        <p class="semi-bold incomplete-text ng-scope" translate="What are the qualities you most desire in a work environment and/or manager?">对一份工作或一位管理者，你最看重的方面或品质是哪些?</p>
                                                        <p class="semi-bold incomplete-text ng-scope" translate="Describe a unique experience you’ve had and how it changed your perspective.">Describe a unique experience you’ve had and how it changed your perspective.</p>
                                                    </div>
                                                </div>
                                                <!-- end ngIf: $state.is('udacity.user.edit') && user.profile_questions.length === 0 -->
                                                <!-- Tour Step 2 -->
                                                <div class="popover onboard-popover in bottom ng-scope ng-hide" style="top: 70px; left: 60px" ng-show="udacityTour.step === 2" aria-hidden="true">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td><img src="/images/p-tour-02_recruit-data.svg" width="100%"></td>
                                                                <td><span translate="Keep your employment preferences up to date. &nbsp;Employers will be able to search and find you based on your selections." class="ng-scope">Keep your employment preferences up to date. &nbsp;Employers will be able to search and find you based on your selections.</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="popover-btn ng-scope" ng-click="switchTourStep(3)" translate="Got it" tabindex="0">明白</div>
                                                    </div>
                                                </div>
                                                <!-- ngIf: user.profile_questions.length > 0 -->
                                                <div class="row ng-scope">
                                                    <!-- ngIf: user.preferred_employment_types.length > 0 || user.relocate_within_country || user.relocate_international || user.will_work_remote === 'yes' -->
                                                    <!-- ngIf: (user.languages && user.languages.length > 0) || (user.work_sponsorship && user.work_sponsorship.length > 0) -->
                                                </div>
                                            </div>
                                            <!-- end ngIf: editingSection !== 'recruitment-anchor' -->
                                            <!-- ngIf: editingSection === 'recruitment-anchor' -->
                                        </div>
                                    </section>
                                    <section class="ui_block">
                                        <!-- Skills -->
                                        <div id="profile-skills" ng-show="$state.is('udacity.user.edit') || user.skill_experience.length > 0" class="contain visible profile-section" ng-class="{'edit-section': editingSection === 'skills-anchor', 'form-is-saving': formIsSaving &amp;&amp; editingSection === 'skills-anchor'}"
                                             aria-hidden="false">
                                            <div class="loading-image-container">
                                                <div class="loading-image spin"></div>
                                            </div> <span id="skills-anchor" class="anchor"></span>
                                            <!-- ngIf: editingSection !== 'skills-anchor' -->
                                            <!-- ngInclude: 'app/profiles_v3/view/view_skills.html' -->
                                            <div ng-if="editingSection !== 'skills-anchor'" ng-include="'app/profiles_v3/view/view_skills.html'" class="ng-scope">
                                                <div class="row ng-scope">
                                                    <h2 translate="Skills" class="ng-scope">技能</h2> </div>
                                                <!-- ngIf: $state.is('udacity.user.edit') && user.skill_experience.length === 0 -->
                                                <div class="row row-gap-sm ng-scope" ng-if="$state.is('udacity.user.edit') &amp;&amp; user.skill_experience.length === 0">
                                                    <p class="incomplete-text ng-scope" translate="Earn skills as you complete your Nanodegree or add in your own">完成智慧创新项目获得技能，或添加你自己的技能</p>
                                                    <div class="skill-badge incomplete-text">
                                                        <div class="exp-level-flair expert">
                                                            <div class="rectangle-1"></div>
                                                            <div class="rectangle-2"></div>
                                                            <div class="rectangle-3"></div>
                                                        </div> <span translate="Skill 1" class="ng-scope">技能 1</span> </div>
                                                    <div class="skill-badge incomplete-text">
                                                        <div class="exp-level-flair intermediate">
                                                            <div class="rectangle-1"></div>
                                                            <div class="rectangle-2"></div>
                                                            <div class="rectangle-3"></div>
                                                        </div> <span translate="Skill 2" class="ng-scope">技能 2</span> </div>
                                                    <div class="skill-badge incomplete-text">
                                                        <div class="exp-level-flair beginner">
                                                            <div class="rectangle-1"></div>
                                                            <div class="rectangle-2"></div>
                                                            <div class="rectangle-3"></div>
                                                        </div> <span translate="Skill 3" class="ng-scope">技能 3</span> </div>
                                                </div>
                                                <!-- end ngIf: $state.is('udacity.user.edit') && user.skill_experience.length === 0 -->
                                                <!-- ngIf: user.skill_experience.length > 0 -->
                                            </div>
                                            <!-- end ngIf: editingSection !== 'skills-anchor' -->
                                            <!-- ngIf: editingSection === 'skills-anchor' -->
                                            <a ng-show="$state.is('udacity.user.edit') &amp;&amp; editingSection !== 'skills-anchor'" class="edit-toggle" ng-click="toggleEdit('skills-anchor')" tabindex="3" onkeydown="if (event.keyCode == 13) click()" onclick="this.blur()" aria-hidden="false"></a>
                                        </div>
                                    </section>
                                    <section class="ui_block">
                                        <!-- Projects -->
                                        <div id="profile-projects" ng-show="$state.is('udacity.user.edit') || (user.allProjects &amp;&amp; user.allProjects.length > 0)" aria-hidden="false">
                                            <!-- ngInclude: 'app/profiles_v3/view/view_projects.html' -->

                                            <!-- ngInclude: 'app/profiles_v3/edit/edit_projects.html' -->
                                            <div ng-show="$state.is('udacity.user.edit')" ng-include="'app/profiles_v3/edit/edit_projects.html'" class="ng-scope" aria-hidden="false">
                                                <div class="profile-section contain ng-scope" ng-class="{'form-is-saving': formIsSaving &amp;&amp; editingSection === 'projects-anchor'}">
                                                    <div class="loading-image-container">
                                                        <div class="loading-image spin"></div>
                                                    </div> <span id="tour-projects" class="anchor"></span>
                                                    <!-- Visible Projects -->
                                                    <div class="row row-gap-md text-center"> <span id="projects-anchor" class="anchor"></span>
                                                        <h2 translate="Projects" class="ng-scope">项目</h2> <a class="clickable all-caps" ng-click="addNewProject()" tabindex="0">+ <span translate="Add a project" class="ng-scope">添加一个项目</span></a> </div>
                                                    <!-- Tour Step 3 -->
                                                    <div class="popover onboard-popover in bottom ng-hide" style="top: 340px; left: -25px" ng-show="udacityTour.step === 3" aria-hidden="true">
                                                        <div class="arrow"></div>
                                                        <div class="popover-content">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td><img src="/images/p-tour-03_project.svg" width="100%"></td>
                                                                    <td><span translate="Nanodegree projects will be added to your profile as you complete them.&nbsp;Further distinguish your ability by personalizing their descriptions and pictures, and add projects you've completed outside of Udacity." class="ng-scope">Nanodegree projects will be added to your profile as you complete them.&nbsp;Further distinguish your ability by personalizing their descriptions and pictures, and add projects you've completed outside of Udacity.</span></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="popover-btn ng-scope" ng-click="switchTourStep(4)" translate="Got it" tabindex="0">明白</div>
                                                        </div>
                                                    </div>
                                                    <div class="row extend-right ng-pristine ng-untouched ng-valid ui-sortable" ng-model="profileObject.user.visibleProjects" ui-sortable="projectSortingOptions" tabindex="0" aria-invalid="false">
                                                        <!-- Empty project section -->
                                                        <!-- ngIf: profileObject.user.allProjects.length === 0 -->
                                                        <div class="col-xs-12 col-sm-6 project-wrap static ng-scope" ng-if="profileObject.user.allProjects.length === 0">
                                                            <div class="project">
                                                                <div class="project__image"></div>
                                                                <div class="project__information">
                                                                    <p class="semi-bold incomplete-text ng-scope" translate="Your Udacity Project">你的智慧创新项目</p> <span class="skill-badge incomplete-text"><span translate="Skill 1" class="ng-scope">技能 1</span></span> <span class="skill-badge incomplete-text"><span translate="Skill 2" class="ng-scope">技能 2</span></span>
                                                                    <p class="project__description incomplete-text ng-scope"
                                                                       translate="Show off all your work from your Nanodegree or other projects you are proud of.">展示你所引以自豪的东西，比如你的智慧创新项目。</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end ngIf: profileObject.user.allProjects.length === 0 -->
                                                        <!-- ngRepeat: project in profileObject.user.visibleProjects -->
                                                    </div>
                                                    <!-- Hidden Projects -->
                                                    <!-- ngIf: hiddenProjects.length > 0 -->
                                                    <div class="row extend-right">
                                                        <!-- ngRepeat: project in hiddenProjects = (profileObject.user.allProjects | filter:{hidden:'true'}) -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="ui_block">
                                        <!-- Experiences -->
                                        <div id="profile-history" class="contain visible profile-section" ng-show="$state.is('udacity.user.edit') || (user.experiences &amp;&amp; user.experiences.length > 0) || (user.education &amp;&amp; user.education.length > 0)" aria-hidden="false">
                                            <!-- ngInclude: 'app/profiles_v3/view/view_history.html' -->
                                            <div ng-show="$state.is('udacity.user.view')" ng-include="'app/profiles_v3/view/view_history.html'" class="ng-scope ng-hide" aria-hidden="true">
                                                <!-- ngIf: user.experiences.length > 0 -->
                                                <div class="history-list-row row-gap-md ng-scope">
                                                    <div scroll-pane="" scroll-name="work-scroller" class="scroll_pane" style="height: 0px; overflow: hidden; padding: 0px; width: 0px;">
                                                        <div class="jspContainer" style="width: 0px; height: 0px;">
                                                            <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 0px;">
                                                                <div style="width: 100%">
                                                                    <div class="history-item-container" style="width: 0px">
                                                                        <!-- ngRepeat: experience in user.experiences | orderHistories track by experience.id -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ngIf: user.education.length > 0 -->
                                                <div class="history-list-row ng-scope">
                                                    <div scroll-pane="" scroll-name="education-scroller" class="scroll_pane" style="height: 0px; overflow: hidden; padding: 0px; width: 0px;">
                                                        <div class="jspContainer" style="width: 0px; height: 0px;">
                                                            <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 0px;">
                                                                <div class="history-item-container" style="width: 0px">
                                                                    <!-- ngRepeat: education in user.education | orderHistories track by education.id -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ngInclude: 'app/profiles_v3/edit/edit_history.html' -->
                                            <div ng-show="$state.is('udacity.user.edit')" ng-include="''" class="ng-scope" aria-hidden="false"><span id="histories-anchor" class="anchor ng-scope"></span>
                                                <div class="row row-gap-sm ng-scope">
                                                    <h2 translate="Work Experience" class="ng-scope">工作经验</h2> <a class="clickable all-caps" ng-click="toggleExperienceAdd()" tabindex="0">+ <span translate="Add work experience" class="ng-scope">添加工作经验</span></a> </div>
                                                <!-- ngIf: profileObject.user.experiences.length === 0 -->
                                                <div class="row row-gap-lg ng-scope" ng-if="profileObject.user.experiences.length === 0">
                                                    <p class="incomplete-text ng-scope" translate="Do you have any prior work experience? List your 2-3 most relevant experiences.">你是否有工作经验？列出2－3份最相关的工作经验。</p>
                                                </div>
                                                <!-- end ngIf: profileObject.user.experiences.length === 0 -->
                                                <!-- ngIf: profileObject.user.experiences.length > 0 -->
                                                <div class="row row-gap-sm ng-scope">
                                                    <h2 translate="Education" class="ng-scope">教育</h2> <a class="clickable all-caps" ng-click="toggleEducationAdd()" tabindex="0">+ <span translate="Add education" class="ng-scope">添加教育背景</span></a> </div>
                                                <!-- ngIf: profileObject.user.education.length === 0 -->
                                                <div class="row ng-scope" ng-if="profileObject.user.education.length === 0">
                                                    <p class="incomplete-text ng-scope" translate="Do you have any prior education history?">你在哪些学校接受教育?</p>
                                                </div>
                                                <!-- end ngIf: profileObject.user.education.length === 0 -->
                                                <!-- ngIf: profileObject.user.education.length > 0 -->
                                                <!-- Tour Step 4 -->
                                                <div class="popover onboard-popover in bottom ng-scope ng-hide" style="top: 340px; left: 60px" ng-show="udacityTour.step === 4" aria-hidden="true">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td><img src="/images/p-tour-04_work-edu.svg" width="100%"></td>
                                                                <td><span translate="Display your most relevant work and education experiences here." class="ng-scope">Display your most relevant work and education experiences here.</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="popover-btn ng-scope" ng-click="switchTourStep(5)" translate="Got it" tabindex="0">明白</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- ngIf: !$state.is('udacity.user.edit') -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
