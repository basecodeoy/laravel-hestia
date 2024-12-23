<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Hestia\Features\RejectTeamInvitation;

use BaseCodeOy\Hestia\Concerns\HasTeamsInterface;
use BaseCodeOy\Hestia\Configuration\Eloquent;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;

final class RejectTeamInvitation implements RejectTeamInvitationInterface
{
    public function __invoke(HasTeamsInterface $user, int $invitationId): RejectTeamInvitationResponseInterface
    {
        $invitation = Eloquent::findTeamInvitation($invitationId);

        if (!Gate::forUser($user)->check('removeTeamMember', $invitation->team)) {
            throw new AuthorizationException();
        }

        $invitation->delete();

        return App::make(RejectTeamInvitationResponseInterface::class);
    }
}
