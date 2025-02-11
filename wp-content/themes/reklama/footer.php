<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reklama
 */

?>
    <div class="prefootter">
        <div class="prefootter__container main-container">
            <a href="#">
                <svg width="49" height="52" viewBox="0 0 49 52" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="0.5" y="0.5" width="48" height="51" rx="2.5" fill="#191410"/>
                    <rect x="0.5" y="0.5" width="48" height="51" rx="2.5" stroke="#1A1512"/>
                    <rect x="14" y="11" width="21" height="30" fill="url(#pattern0_5_753)"/>
                    <defs>
                        <pattern id="pattern0_5_753" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_5_753" transform="matrix(0.047619 0 0 0.0333333 0.285714 0)"/>
                        </pattern>
                        <image id="image0_5_753" width="9" height="9" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA1xpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDM0MiwgMjAxMC8wMS8xMC0xODowNjo0MyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowQzVGQzY2OTdGQTdFMDExQTU5Q0FFQkEzRjdBNjlCQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpERDEyMzgwQkM0MUMxMUUyQkVEODhDQTZFMjRGMkQ0MyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpERDEyMzgwQUM0MUMxMUUyQkVEODhDQTZFMjRGMkQ0MyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjI3RjAwNzZDOEIzRTIxMTk5MUNCNDI1NzQ5QjE0ODUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MEM1RkM2Njk3RkE3RTAxMUE1OUNBRUJBM0Y3QTY5QkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5gKbgPAAAAM0lEQVR42mL4//8/AxqeiS6GS8FMXIpm4jIRmwIMNi4FKGJkW8dAyDqsChnBKgkAgAADALit5Oka0FsxAAAAAElFTkSuQmCC"/>
                    </defs>
                </svg>
            </a>
        </div>
    </div>
	<footer class="footer">
        <div class="footer__container main-container">
            <?php echo get_field('tekst_v_futer', 'options')?>
        </div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
