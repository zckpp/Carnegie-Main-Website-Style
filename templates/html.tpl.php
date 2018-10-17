<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="CarnegieScience.edu showcases the exciting  discoveries of our pioneering researchers in astronomy, Earth and planetary science, genetics and developmental biology, global ecology,  matter at extremes states,  and plant science. It also features our science education programs, and much, much more.">
  <meta name="keywords" content="Carnegie Science, Independent scientific research, Astronomy, Earth and Planetary Science, Plant Science, Matter at Extreme States, Genetics and Developmental Biology, Global Ecology, Discovery, Essential Exception, Unconventional, Unconstrained, Small size, big impact, Investigator driven research, Entrepreneurial approach, Exceptional scientists, Internally funded research, Giant Magellan Telescope, Multidisciplinary scientific research, World class paradigm-shifting research, Cell division, Cell nucleus, Cholesterol, Cholesterol metabolism, Chromosome structure, Developmental biology, DNA, Egg production and development, Embryo development, Fat processing, flat fish, frog, fruit fly, Genetic engineering, Genetic Recombination, Lipids, Metamorphosis, mRNA, Nervous system development, Retinal cancer, RNA, Sexual reproduction, Stem cells, Worm, Yeast, Zebrafish, Alternative energy, Astrochemistry, Biomarkers, Diamonds, Earth science, Earth’s interior, Extraterrestrial life, Extreme pressures, Extremophiles, Ferroelectrics, First principles, High-pressure physics, Hydrogen, Hydrogen fuel, Storage, Hydrothermal vents, Life on Mars, Man-made diamonds, Materials science, Meteorites, Nanomaterials, Nanotechnology, Nitrogen cycling, Nitrogen pollution, Origins, Planet evolution, Planet interiors, Planetary exploration, Planetary science, Rise of Earth’s atmosphere, Solar system evolution, Superconductors, Airborne observatory, Amazon ecology, Biosphere II, Carbon cycle, Carbon cycling, Clear cutting, Climate change, Climate change and crop yields, Climate modeling, Desertification, Ecology, Ecosystems, Global climate change, Global warming, Invasive species, Logging in Amazon, Ocean acidification, Rainforest destruction, Remote sensing, Selective logging, Active galactic nuclei, Birth of the universe, Black holes, Cosmology, Dark energy, Dark matter, Distant galaxies, Early universe, Edwin Hubble, Extragalactic distance scale, Extremely large telescopes, Galaxy clusters, Galaxy collisions, Galaxy mergers, Gamma-ray bursts, Globular clusters, Hubble constant, Milky Way, Old galaxies, Origins, Quasars, Stars, Stellar evolution, Universe evolution, X-ray universe, Alternative energy sources, Arabidopsis thaliana, Biofuels, Bioinformatics, Crop improvement, Genetic engineering, Genetically Modified Organisms (GMOs), Maize, Nanosensors, Photosynthesis, Plant disease, Plant disease resistance, Plant genetics, Plant nutrients, Plant pest prevention, Seed development, Antarctic meteorites, Asteroids, Astrobiology, Beta Pictoris, Carnegie Caltech planet search, Comets, Continent formation, Core accretion, Dark Matter, Disk instability, Doppler velocity technique, Earthquakes, Exoplanets, Extrasolar planet atmospheres, Extrasolar planets, Extraterrestrial material, Geochronology, Interplanetary dust particles, M-31, Mars, Mercury, MESSENGER Mission to Mercury, Meteorites, Origin of life, Planet formation theory, Plate tectonics, Protoplanets, Search for life, Seismology, Stellar disks, Terrestrial planet formation, Volcanoes">
  <meta name="author" content="Carnegie Science">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php global $base_url; print $base_url."/".path_to_theme(); ?>/js/waypoints.min.js"></script>
  <script src="<?php global $base_url; print $base_url."/".path_to_theme(); ?>/js/jquery.fitvids.js" type="text/javascript"></script>
  <script src="<?php global $base_url; print $base_url."/".path_to_theme(); ?>/js/scripts.js" type="text/javascript"></script>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b55d071cd45ba0011c0cae7&product=social-analytics' async='async'></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
