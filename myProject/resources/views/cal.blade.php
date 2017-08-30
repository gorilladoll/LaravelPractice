<!-- <?php if($num > 5): ?>
  <p><?=$num?> (은)는 5보다 크다</p>
<?php else: ?>
  <p><?=$num?> (은)는 5보다 작거나 같다</p>
<?php endif; ?> -->


@if($num > 5)
<p>{{ $num }} (은)는 5보다 크다</p>
@elseif($num = 5)
<p>{{ $num }}(은) 5와 같다</p>
@else
<p>{{ $num }} (은)는 5보다 작다</p>
@endif
