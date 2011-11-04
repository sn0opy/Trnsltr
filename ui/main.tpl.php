<!DOCTYPE html>
<html>
    <head>
        <title>Trnsltr</title>
        <meta charset="UTF-8" />
        <link href="{{@BASE}}/ui/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>Trnsltr</h1>
            </div>
            <div class="content">
                <div class="sidebar">
                    <div class="sidebarWidget">
                        <h2>Projects</h2>
                        <ul>
                            <F3:repeat group="{{@projects}}" value="{{@project}}">
                                <li><a href="{{@BASE}}/project/{{@project.hash}}">{{@project.name}}</a></li>
                            </F3:repeat>

                        </ul>
                    </div>
                </div>
                
                <div class="innerContent">
                    <include href="{{@contenttpl}}" />
                </div>
            </div>
            <div class="footer">
                <p>&copy; 2011 Trnsltr-Team</p>
            </div>
        </div>
    </body>
</html>