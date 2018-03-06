<ul class="list-group list-inline">
    <li>
        <img class="img-responsive" src="<?= $bookingLocation->getThumb(); ?>">
    </li>
    <li>
        <h5><?= lang('sampoyigi.reservation::default.label_guest_num'); ?></h5>
        <h4><?= $booking->getGuestSizeOptions()[$guestSize]; ?></h4>
    </li>
    <li>
        <h5><?= lang('sampoyigi.reservation::default.label_date'); ?></h5>
        <h4><?= $longDateTime; ?></h4>
    </li>
    <li>
        <h5><?= lang('sampoyigi.reservation::default.label_time'); ?></h5>
        <h4><?= $selectedTime; ?></h4>
    </li>
    <li>
        <h5><?= lang('sampoyigi.reservation::default.label_location'); ?></h5>
        <h4><?= $bookingLocation->getName(); ?></h4>
    </li>
</ul>