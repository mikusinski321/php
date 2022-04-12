<?php
/**
 * Template for view all bookmarks.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017-2022
 */
?>

<?php if (isset($view['bookmarks'])) : ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>URL</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($view['bookmarks'] as $bookmark): ?>
            <tr>
                <td><?php echo $bookmark['title'] ?? ''; ?></td>
                <td><?php echo $bookmark['url'] ?? ''; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No data! index.html.php</p>
<?php endif;