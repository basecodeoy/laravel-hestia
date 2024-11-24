<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Hestia\Features\RejectTeamInvitation;

use BaseCodeOy\Hestia\Concerns\HasTeamsInterface;

interface RejectTeamInvitationInterface
{
    public function __invoke(HasTeamsInterface $user, int $invitationId): RejectTeamInvitationResponseInterface;
}
