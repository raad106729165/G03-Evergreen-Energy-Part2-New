<?php
    /* Home page (by Redha Waseem). Shared header (with navigation) and footer come from include files. */
    $pageTitle  = "Home | Evergreen Energy";
    $bodyClass  = "home";                                       /* switches on the body.home rules in styles.css */
    $extraStyle = ".join { border-left: 6px solid #7aa602; }";  /* this page's one internal style element */
    include "header.inc";
?>
<main id="main" tabindex="-1">
    <div class="search-bar">
    <!-- Searches the live website with Google -->
    <form action="https://www.google.com/search" method="get" role="search">
    <input type="hidden" name="as_sitesearch" value="raad106729165.github.io/G03-Sustainable-Energy-Solutions-Company">
    <input type="search" name="q" placeholder="Search..." aria-label="Search this website">
    <button type="submit">Search</button>
  </form>
</div>
<section class="hero">
    <div class="hero-content">
     <h1>Power of Clean Energy</h1>
      <p id="intro-text">Smarter energy for a sustainable tomorrow.</p>
      <a href="about.php" class="apply">About Us</a>
    </div>
</section>

<section>
    <h2>Who are we?</h2>
    <p>Evergreen Energy is a sustainable energy solutions company. We believe clean energy should be simple, affordable, and available to everyone, and we are dedicated to helping homes, businesses, and communities move away from fossil fuels and toward renewable power.</p>
    <img src="images/powerplantwork.jpg" alt="Engineers gathered around a monitor reviewing solar panel designs" class="section-img">
</section>
<section>
    <h2>Our Mission &amp; Vision</h2>
    <p class="text-left">
        At Evergreen Energy, our mission is to make renewable power the foundation of everyday life.
        We are driven by the belief that clean energy should not be a luxury, but a right accessible
        to all households, businesses, and communities. Our vision is a future where fossil fuels are
        replaced by sustainable solutions that empower people to live affordably, responsibly, and
        in harmony with the environment. By combining innovation with integrity, we aim to lead the
        transition toward a greener world, ensuring that every project we deliver contributes to
        reducing carbon emissions and building a resilient energy future for generations to come.
    </p>
</section>

<section>
    <h2>What Do We Do?</h2>
    <p class="text-left">
        We provide practical, cost‑effective solutions that help Australians embrace renewable energy
        and reduce their dependence on fossil fuels. Since 2020, our team has worked alongside
        homeowners, businesses, and community groups to design and implement projects that deliver
        real impact. From solar installations and wind power systems to energy‑efficient upgrades
        and comprehensive energy audits, we tailor our services to meet diverse needs while lowering
        costs and improving sustainability. By combining technical expertise with a commitment to
        transparency, we make the shift to clean energy simple, affordable, and rewarding for everyone
        we serve.
    </p>
    <img src="images/engineers-discussing-project.jpg" alt="Engineers in hard hats discussing project plans around a table" class="section-img" width="612" height="408">
</section>
<!-- ===== Start: done by Marwah and edited by Rayahen Raad ===== -->
<section>
    <h2>Commitment to Sustainability</h2>
    <div class="narrow-centre">
        <p>
            At Evergreen Energy, sustainability is at the heart of everything we do.
            We integrate eco‑friendly practices into every project, ensuring that our
            solutions not only deliver reliable energy but also protect the planet for
            future generations. This commitment reinforces our brand identity and
            drives our mission to build a greener tomorrow.
        </p>
    </div>
</section>

<!-- ===== End: done by Marwah and edited by Rayahen Raad ===== -->
<section>
    <h2>Our Projects</h2>
    <!-- Sideways scroll with keyboard -->
    <div class="table-wrap" tabindex="0" role="region" aria-label="Evergreen Energy projects table">
    <table>
        <caption class="visually-hidden">Evergreen Energy projects grouped by energy type</caption>
        <thead>
        <tr>
        <th colspan="4" scope="colgroup">Evergreen Energy Projects</th>
        </tr>
        <tr>
            <th scope="col">Energy Type</th>
            <th scope="col">Project</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th rowspan="2" scope="rowgroup">Solar</th>
            <td>Greenfield Solar Farm</td>
            <td>Queensland</td>
            <td>In Progress</td>
        </tr>
        <tr>
            <td>Sunrise Rooftop Program</td>
            <td>Victoria</td>
            <td>In Progress</td>
        </tr>
        <tr>
            <th rowspan="2" scope="rowgroup">Wind</th>
            <td>Coastal Wind Farm</td>
            <td>Victoria</td>
            <td>Completed</td>
        </tr>
        <tr>
            <td>Highland Wind Project</td>
            <td>Queensland</td>
            <td>In Progress</td>
        </tr>
        <tr>
            <th scope="row">Battery Storage</th>
            <td>Metropolitan Battery Project</td>
            <td>New South Wales</td>
            <td>Planned</td>
        </tr>
        </tbody>
    </table>
    </div>

   <p id="belowtable"><a href="#branches">Contact your nearest branch</a> or <a href="about.php">learn more about us</a>.</p>
</section>
<section>
    <h2>Our Office Locations</h2>
    <ul class="offices">
        <li>
            <img src="images/brisbane.jpg" alt="Brisbane city skyline" class="office-img">
            <strong>Brisbane</strong>
            <span>Queensland Office</span>
        </li>
        <li>
            <img src="images/melbourne.jpg" alt="Melbourne city skyline" class="office-img">
            <strong>Melbourne</strong>
            <span>Victoria Office</span>
        </li>
        <li>
            <img src="images/sydney.jpg" alt="Sydney Opera House and harbour" class="office-img">
            <strong>Sydney</strong>
            <span>New South Wales Office</span>
        </li>
    </ul>

</section>

<div class="join-row">

  <!-- Join Our Tech Team -->
  <section class="join">
    <h2>Join Our Tech Team</h2>
    <p>We are growing our technology team. Explore our roles and apply today.</p>
    <a class="apply" href="apply.php">Apply now</a>
  </section>

  <!-- Testimonial: aria-labelledby is helpful for screen readers -->
  <aside class="testimonial" aria-labelledby="testimonial-heading">
  <h2 id="testimonial-heading">What Our Team Says</h2>
  <figure>
  <blockquote>
    <p>“It feels good to go to work knowing my code helps people see and understand clean energy projects in their community.”</p>
  </blockquote>
  <figcaption><strong>Raza Waqas, Software Developer</strong></figcaption>
  </figure>
  </aside>
</div>
<section id="branches">
    <h2>Our Branch Details</h2>
<!-- Sideways scroll with keyboard -->
<div class="table-wrap" tabindex="0" role="region" aria-label="Evergreen Energy branches table">
  <table>
    <caption>Email and phone contacts for each Evergreen Energy branch</caption>
    <thead>
    <tr>
      <th colspan="3" scope="colgroup">Evergreen Energy Branches</th>
    </tr>
    <tr>
      <th scope="col">Branch</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row">Melbourne</th>
      <td><a href="mailto:melbourne@evergreenenergy.com">melbourne@evergreenenergy.com</a></td>
      <td><a href="tel:+61312345678">+61 3 1234 5678</a></td>
    </tr>
    <tr>
      <th scope="row">Sydney</th>
      <td><a href="mailto:sydney@evergreenenergy.com">sydney@evergreenenergy.com</a></td>
      <td><a href="tel:+61223456789">+61 2 2345 6789</a></td>
    </tr>
    <tr>
      <th scope="row">Brisbane</th>
      <td><a href="mailto:brisbane@evergreenenergy.com">brisbane@evergreenenergy.com</a></td>
      <td><a href="tel:+61734567890">+61 7 3456 7890</a></td>
    </tr>
    </tbody>
  </table>
</div>
</section>
<section class="acknowledgement" aria-labelledby="ack-heading">
    <h2 id="ack-heading">Acknowledgement of Country</h2>
    <!-- inline style element (the one inline style kept on this page) -->
    <p style="font-style: italic; color: #155b36;"><strong>We acknowledge the Traditional Custodians of the lands on which we work and live, and pay our respects to Elders past and present. Sovereignty was never ceded.</strong></p>
    <p>Every solar farm, wind farm and battery we build sits on Country that Aboriginal and Torres Strait Islander peoples have cared for over tens of thousands of years. Before a project begins, we seek the free, prior and informed consent of Traditional Owners, and we work with them on land use, cultural heritage protection, local jobs and shared benefits, because a clean energy future is only just if it respects the people and places it depends on.</p>
</section>
    <p class="page-sources">Sources and acknowledgements: the image credits and HTML and CSS references for this site are listed on the <a href="about.php#ack-heading">About Us page</a>.</p>
</main>

<?php include "footer.inc"; ?>

