<div id="node-list-<?php echo $alias; ?>" class="node-list">
    <ul>
    <?php
        foreach ($nodesList AS $n) {
            if ($options['link']) {
                echo '<li>';
                echo $html->link($n['Node']['title'], array(
                    'plugin' => $options['plugin'],
                    'controller' => $options['controller'],
                    'action' => $options['action'],
                    'type' => $n['Node']['type'],
                    'slug' => $n['Node']['slug'],
                ));
                echo '</li>';
            } else {
                echo '<li>' . $n['Node']['title'] . '</li>';
            }
        }
    ?>
    </ul>
</div>