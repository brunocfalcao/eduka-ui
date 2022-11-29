@php

use Brunocfalcao\Chrono\Chrono;
use Eduka\Analytics\Services\Visit;
use Eduka\Services\Support\ApplicationLog;

Chrono::category('duration-webpage')->start();

@endphp
<!DOCTYPE html>
<html>
{{ $slot }}
</html>
@php
	$duration = Chrono::category('duration-webpage')->stop();
    ApplicationLog::group('duration-webpage')
    			  ->relatedTo(Visit::get())
    			  ->log($duration);
@endphp