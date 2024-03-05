<?php

function status_blog($status)
{
    switch ($status) {
        case 'published':
            return '<span class="badge bg-success">Published</span>';
            break;
        case 'archived':
            return '<span class="badge bg-warning">Archived</span>';
            break;
        default:
            return '<span class="badge bg-secondary">Draft</span>';
            break;
    }
}

function date_indo($date)
{
    $months = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];

    $date = date_create($date);
    $day = date_format($date, 'd');
    $month = date_format($date, 'n');
    $year = date_format($date, 'Y');

    return $day . ' ' . $months[$month] . ' ' . $year;
}
