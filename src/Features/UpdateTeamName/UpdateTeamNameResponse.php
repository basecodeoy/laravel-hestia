<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Hestia\Features\UpdateTeamName;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

final class UpdateTeamNameResponse implements UpdateTeamNameResponseInterface
{
    /**
     * @param \Illuminate\Http\Request $request
     */
    public function toResponse($request): RedirectResponse
    {
        return Redirect::back(303);
    }
}
