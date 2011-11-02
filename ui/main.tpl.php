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
                            <li><a href="#">Test01</a></li>
                            <li><a href="#">Test02</a></li>
                            <li><a href="#">Test03</a></li>
                            <li><a href="#">Test04</a></li>
                            <li><a href="#">Test05</a></li>
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