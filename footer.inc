<?php
// footer.inc - shared site footer for every page.

// Page links: file => link text
$footer_pages = [
    'index.php' => 'Home',
    'jobs.php'  => 'Job Description',
    'apply.php' => 'Apply',
    'about.php' => 'About Us',
];

// Quick links: URL => link text
$footer_links = [
    'https://github.com/raad106729165/G03-Sustainable-Energy-Solutions-Company' => 'GitHub repository',
    'https://dragqon.atlassian.net/jira/software/projects/G03/boards/4/backlog' => 'Jira board',
    'https://raad106729165.github.io/G03-Sustainable-Energy-Solutions-Company/' => 'Live website',
];

// Contact details: label, link, text shown
$footer_contacts = [
    ['Email',   'mailto:info@evergreenenergy.com',    'info@evergreenenergy.com'],
    ['Support', 'mailto:support@evergreenenergy.com', 'support@evergreenenergy.com'],
    ['Phone',   'tel:+61390000000',                   '+61 3 9000 0000'],
];

$page_files    = array_keys($footer_pages);
$link_urls     = array_keys($footer_links);
$rows          = max(count($footer_pages), count($footer_links), count($footer_contacts));
?>
    <footer>
        <!-- PASTE THE START OF YOUR FOOTER HERE:
             the wrapper <div> and the footer-left section that come
             before <div class="footer-right"> in your original HTML -->

            <div class="footer-right">
                <table class="footer-table">
                    <tr>
                        <th scope="col">Pages</th>
                        <th scope="col">Quick Links</th>
                        <th scope="col">Contact Us</th>
                    </tr>
                    <?php for ($i = 0; $i < $rows; $i++): ?>
                    <tr>
                        <td><?php if (isset($page_files[$i])): ?><a href="<?php echo $page_files[$i]; ?>"><?php echo $footer_pages[$page_files[$i]]; ?></a><?php endif; ?></td>
                        <td><?php if (isset($link_urls[$i])): ?><a href="<?php echo $link_urls[$i]; ?>"><?php echo $footer_links[$link_urls[$i]]; ?></a><?php endif; ?></td>
                        <td><?php if (isset($footer_contacts[$i])): ?><?php echo $footer_contacts[$i][0]; ?>: <a href="<?php echo $footer_contacts[$i][1]; ?>"><?php echo $footer_contacts[$i][2]; ?></a><?php endif; ?></td>
                    </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>
    </footer>