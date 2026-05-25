<?php 
	date_default_timezone_set("Asia/Jakarta");
	
	function datetimeReplaceEnglishToIndonesian($arg)
	{
	    // day long
	    $arg = str_replace("Sunday", "Minggu", $arg);
	    $arg = str_replace("Monday", "Senin", $arg);
	    $arg = str_replace("Tuesday", "Selasa", $arg);
	    $arg = str_replace("Wednesday", "Rabu", $arg);
	    $arg = str_replace("Thursday", "Kamis", $arg);
	    $arg = str_replace("Friday", "Jumat", $arg);
	    $arg = str_replace("Saturday", "Sabtu", $arg);
	    // day short
	    $arg = str_replace("Sun", "Min", $arg);
	    $arg = str_replace("Mon", "Sen", $arg);
	    $arg = str_replace("Tue", "Sel", $arg);
	    $arg = str_replace("Wed", "Rab", $arg);
	    $arg = str_replace("Thu", "Kam", $arg);
	    $arg = str_replace("Fri", "Jum", $arg);
	    $arg = str_replace("Sat", "Sab", $arg);
	    // month long
	    $arg = str_replace("January", "Januari", $arg); // 1
	    $arg = str_replace("February", "Februari", $arg); // 2
	    $arg = str_replace("March", "Maret", $arg); // 3
	    $arg = str_replace("April", "April", $arg); // 4
	    $arg = str_replace("May", "Mei", $arg); // 5
	    $arg = str_replace("June", "Juni", $arg); // 6
	    $arg = str_replace("July", "Juli", $arg); // 7
	    $arg = str_replace("August", "Agustus", $arg); // 8
	    $arg = str_replace("September", "September", $arg); // 9
	    $arg = str_replace("October", "Oktober", $arg); // 10
	    $arg = str_replace("November", "November", $arg); // 11
	    $arg = str_replace("December", "Desember", $arg); // 12
	    // month short
	    $arg = str_replace("May", "Mei", $arg); // 5
	    $arg = str_replace("Aug", "Ags", $arg); // 8
	    $arg = str_replace("Dec", "Des", $arg); // 12
	    // predicates
	    $arg = str_ireplace("next week", "minggu depan", $arg);
	    $arg = str_ireplace("last week", "minggu lalu", $arg);
	    $arg = str_ireplace("next month", "bulan depan", $arg);
	    $arg = str_ireplace("last month", "bulan lalu", $arg);
	    $arg = str_ireplace("next year", "tahun depan", $arg);
	    $arg = str_ireplace("last year", "tahun lalu", $arg);

	    // remove plural
	    $arg = str_ireplace("seconds", "second", $arg);
	    $arg = str_ireplace("minutes", "minute", $arg);
	    $arg = str_ireplace("days", "day", $arg);
	    $arg = str_ireplace("months", "month", $arg);
	    $arg = str_ireplace("years", "year", $arg);

	    $arg = str_ireplace("second", "detik", $arg);
	    $arg = str_ireplace("minute", "menit", $arg);
	    $arg = str_ireplace("day", "hari", $arg);
	    $arg = str_ireplace("month", "bulan", $arg);
	    $arg = str_ireplace("year", "tahun", $arg);

	    $arg = str_ireplace("week", "minggu", $arg);
	    $arg = str_ireplace("ago", "lalu", $arg);
	    $arg = str_ireplace("later", "lagi", $arg);
	    $arg = str_ireplace("today", "hari ini", $arg);
	    $arg = str_ireplace("yesterday", "kemarin", $arg);
	    $arg = str_ireplace("tomorrow", "besok", $arg);
	    $arg = str_ireplace("this", "ini", $arg);
	    $arg = str_ireplace("now", "sekarang", $arg);
	    return $arg;
	}
    
    function validateDateFormat($date, $format = 'Y-m-d')
	{
	    $d = DateTime::createFromFormat($format, $date);
	    return $d && $d->format($format) === $date;
	}
?>