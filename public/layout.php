<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="<?php echo $view->config->basedir; ?>css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $view->config->basedir; ?>css/pp-jquery.css" />
    <script type="text/javascript" src="<?php echo $view->config->basedir; ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $view->config->basedir; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $view->config->basedir; ?>js/ppjquery.js"></script>
    <title>PP jQuery Plugins</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bd-navbar flex-md-row flex-column">
        <a class="navbar-brand" href="#">PP jQuery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="documentations">Dokumentationen</a>
                <a class="nav-item nav-link" href="examples">Beispiele</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
                <form class="bd-search d-flex align-items-center">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <?php if($current == 'documentations'): ?>
                <nav class="collapse bd-links" id="bd-docs-nav">
                    <div class="bd-toc-item<?php if($sub == 'lightbox'):?> active<?php endif; ?>">
                        <a class="bd-toc-link" href="/documentations/lightbox">
                            Lightbox
                        </a>

                        <ul class="nav bd-sidenav">
                            <li>
                                <a href="/documentations/lightbox#start">
                                    Get started
                                </a>
                            </li>
                            <li>
                                <a href="/documentations/lightbox#options">
                                    Optionen
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="bd-toc-item<?php if($sub == 'hints'):?> active<?php endif; ?>">
                        <a class="bd-toc-link" href="/documentations/hints">
                            Hints
                        </a>

                        <ul class="nav bd-sidenav">
                            <li>
                                <a href="/documentations/hints#start">
                                    Get started
                                </a>
                            </li>
                            <li>
                                <a href="/documentations/hints#options">
                                    Optionen
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-9 col-xl-10 py-md-3 pl-md-5 bd-content" role="main">
                <?php echo $view->page->content; ?>
            </div>
        </div>
    </div>
</body>
</html>