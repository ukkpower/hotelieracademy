<?php echo $this->element('hotel_sidebar'); ?>

<div class="hotels index large-10 medium-9 columns">
    <ul>
      <li>In Progress: <?= $totalOpen; ?></li>
      <li>Certificates Awarded: <?= $totalCerts; ?></li>
    </ul>

    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Staff name</th>
            <th>Course</th>
            <th>progress</th>
            <th>created</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($recentCourses as $recentCourse): ?>
        <tr>
            <td><?= h($recentCourse->employee->name) ?></td>
            <td><?= h($recentCourse->course->name) ?></td>
            <td><?= h($recentCourse->progress) ?></td>
            <td><?= h($this->Time->format($recentCourse->created, 'd/M/Y')) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <h3>Latest Certificates</h3>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Staff name</th>
            <th>completed</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($recentCerts as $recentCertCourse): ?>
        <tr>
            <td><?= h($recentCertCourse->employee->name) ?> / <?= h($recentCertCourse->course->name) ?></td>
            <td><?= h($this->Time->format($recentCertCourse->modified, 'd/M/Y')) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <h3>Recent Staff Progress</h3>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Staff name</th>
            <th>Date started</th>
            <th>Progress</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($recentEmployees as $recentEmployee): ?>
        <tr>
            <td><?= h($recentEmployee->name) ?></td>
            <td><?= h($this->Time->format($recentEmployee->created, 'd/M/Y')) ?></td>
            <td><?= count($recentEmployee->courses) ?> /
                <?= $completedCourses = count(
                						array_filter(
                                $recentEmployee->courses,
               							    function($item){return $item['_joinData']['completed'];}
                						)
                					);
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

</div>
