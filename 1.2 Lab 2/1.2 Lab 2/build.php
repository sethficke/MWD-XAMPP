<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>The Tartanator</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jqm/jquery-3.1.1.min.js"></script>
    <script src="jqm/jquery-migrate-3.0.0.js"></script>
    <link href="jqm/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">
    <script src="jqm/jquery.mobile-1.4.5.min.js"></script>
    <link href="tartans/tartans.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div data-role="page">
        <div data-role="header" data-position="fixed">
            <a href="tartans.html" data-rel="prev" data-icon="back" data-role="button">Back</a>
            <h1>Tartan Builder</h1>
        </div>
        <!-- /header -->

        <div data-role="content">
            <form id="tartanator_form">
                <ul data-role="listview" id="tartanator_form_list">
                    <li data-role="list-divider">Tell us about your tartan</li>
                    <li data-role="fieldcontain">
                        <label for="tartan_name">Tartan Name</label>
                        <input type="text" name="tartan_name" id="tartan_name" placeholder="Tartan Name">
                    </li>
                    <li data-role="fieldcontain">
                        <label for="tartan_info">Tartan Info</label>
                        <textarea cols="40" rows="8" name="tartan_info" id="tartan_info" placeholder="Optional tartan description or info"></textarea>
                    </li>
                    <li data-role="list-divider">Build your colors!</li>
                    <?php for ($i = 0; $i < 6; $i++): // 6 color fields ?>
                        <li class="colorset">
                            <div data-role="fieldcontain" class="color-input">
                                <label class="select" for="color-<?php print $i ?>">Color</label>
                                <select name="colors[]" id="color-<?php print $i ?>">
                                    <option value="">Select a Color</option>
                                    <option value="#000000">Black</option>
                                    <option value="#ffffff">White</option>
                                </select>
                            </div>
                            <div data-role="fieldcontain" class="size-input">
                                <label for="size-<?php print $i ?>">Stitch Count</label>
                                <input id="size-<?php print $i ?>" type="range" min="2" step="2" max="72" autocomplete="off" name="sizes[]" value="2">
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
            </form>
        </div>
        <!-- /content -->

        <div data-role="footer" data-position="fixed" data-theme="c">
            <div data-role="navbar">
                <ul>
                    <li><a href="index.html" data-icon="info">About</a></li>
                    <li><a href="findevent.html" data-icon="star">Events</a></li>
                    <li><a href="tartans.html" data-icon="grid" class="ui-btn-active">Tartans</a></li>
                </ul>
            </div>
            <!-- End of navbar -->
        </div>
        <!-- End of footer -->
    </div>
    <!-- /page -->

</body>

</html>