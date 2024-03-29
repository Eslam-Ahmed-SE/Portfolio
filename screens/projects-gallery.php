<div class="projects-mobile">
    
    <h2><?php echo ucfirst($_GET["project-category"]); ?> apps projects</h2>
    
    <div class="project-card">
        <img src="imgs/test-poejects/1.png">
        <a href="#" onclick="contactsScreen(this, 'project.php?projectID=1', false)">
            <div class="info-container">
                <h4>Project name 1</h4>
                <p>project info and sumarized description</p>
                <p class="info"><i class="far fa-eye"></i> 120</p>
            </div>
        </a>
    </div>
    <div class="project-card">
        <img src="imgs/test-poejects/2.jpg">
        <a href="#" onclick="contactsScreen(this, 'project.php?projectID=2', false)">
            <div class="info-container">
                <h4>Project name 2</h4>
                <p>project info and sumarized description, this text might get bigger to test two line description of the project</p>
                <p class="info"><i class="far fa-eye"></i> 120</p>
            </div>
        </a>
    </div>
    <div class="project-card">
        <img src="imgs/test-poejects/3.png">
        <a href="#" onclick="contactsScreen(this, 'project.php?projectID=3', false)">
            <div class="info-container">
                <h4>Project name 3</h4>
                <p>project info and sumarized description</p>
                <p class="info"><i class="far fa-eye"></i> 120</p>
            </div>
        </a>
    </div>
    <div class="project-card">
        <img src="imgs/test-poejects/4.jpg">
        <a href="#" onclick="contactsScreen(this, 'project.php?projectID=4', false)">
            <div class="info-container">
                <h4>Project name 4</h4>
                <p>project info and sumarized description</p>
                <p class="info"><i class="far fa-eye"></i> 120</p>
            </div>
        </a>
    </div>
<!--
    <div class="project-card">
        <img src="imgs/test-poejects/1.jpg">
        <div class="info-container">
            <h4>Project name</h4>
            <p>project info and sumarized description</p>
            <p class="info"><i class="far fa-eye"></i> 120</p>
        </div>
    </div>
-->
    
</div>

<style>
    
    .projects-mobile {
        text-align: center;
    }
    
    .projects-mobile h2 {
        text-align: left;
        padding: 0 15px 15px 15px;        
    }
    
    .projects-mobile .project-card {
        width: 30%;
        min-width: 300px;
        display: inline-block;
        vertical-align: middle;
        margin: 15px;
        border-radius: 5px;
        
        position: relative;
        background: RGBA(255, 255, 255, 0);
    }
    
    .projects-mobile .project-card img {
        width: 100%;
/*        margin-bottom: 15px;*/
/*        border-radius: 5px 5px 0 0;*/
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    
    .projects-mobile .project-card a {
        text-decoration: none;
        color: black;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        
    }
       
    .projects-mobile .project-card:hover > a .info-container {
        opacity: 1;
    }
    
    .projects-mobile .project-card a .info-container {
/*        position: absolute;*/
        bottom: 0;
        padding: 5px 5px 10px;
        width: calc(100% - 10px);
        border-radius: 0 0 5px 5px;
        background: RGBA(255, 255, 255, 0.65);
        backdrop-filter: blur(15px);
        opacity: 0;
        -webkit-transition:
            opacity 500ms ease-in-out;
        -moz-transition:
            opacity 500ms ease-in-out;
        -o-transition:
            opacity 500ms ease-in-out;
        transition:
            opacity 500ms ease-in-out;
    }
    
    .projects-mobile .project-card a .info-container h4 {
        text-align: left;
        padding: 5px 0 0 15px;
    }
    
    .projects-mobile .project-card a .info-container p {
        text-align: left;
        color: RGBA(120, 120, 120, 1);
        padding: 5px 0px 10px 15px;
        display: block;
    }
    
    .projects-mobile .project-card a .info-container .info {
        font-size: 0.85em;
        padding: 0 0 0 15px;
    }
    
    
</style>