
    <div class="window-header">
        <div class="resize-border-top"></div>
        <div class="info">
            <span class="close" onclick="closeWindow(this)"></span>
            <span class="minimize" onclick="minWindow(this)"></span>
            <span class="maximize" onclick="maxWindow(this)"></span>
            <span class="info-text"></span>
        </div>
        <div class="sub-info">
            <span class="sub-info-icon" onclick="contactsScreen(this, 'projects-categories.html', true)"><i class="far fa-chevron-left"></i></span><span class="sub-info-text">Admin</span>
        </div>
    </div>
    <div class="window-body">
        <div class="translucent-panel">
            <input type="search" name="projectsSearch" placeholder="Search"/>
            <ul class="links-List">
                <a href="#" onclick="contactsScreen(this, 'projects-gallery.php?project-category=mobile', false)"><li><i class="far fa-mobile-android"></i><span>Mobile Apps</span></li></a>
                <a href="#" onclick="contactsScreen(this, 'projects-gallery.php?project-category=web', false)"><li><i class="far fa-browser"></i><span>Web Apps</span></li></a>
            </ul>
        </div>
        <div class="main-panel"><div class="content" content-url=""></div></div>
    </div>
    <div class="resize-border-left"></div>
