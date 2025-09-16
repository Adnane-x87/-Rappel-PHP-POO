<?php
declare(strict_types=1);

$input = [
  'title'     => 'PHP 8 en pratique',
  'excerpt'   => '',
  'views'     => '300',
  // 'published' absent
  'author'    => 'Yassine'
];

function strOrNull(?string $s): ?string {
  $s = $s !== null ? trim($s) : null;
  return $s === '' ? null : $s;
}

function intOrZero(int|string|null $v): int {
  return max(0, (int)($v ?? 0));
}
