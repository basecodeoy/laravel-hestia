<?php

declare(strict_types=1);

namespace BaseCodeOy\Hestia\Features\ShowTeam;

final class ShowTeamController
{
    public function __invoke(int $teamId, ShowTeamInterface $showTeam): ShowTeamResponseInterface
    {
        return $showTeam($teamId);
    }
}
