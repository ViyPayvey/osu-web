<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Notifications\Store;

use Illuminate\Notifications\Messages\SlackMessage;

class StoreMessage extends Message
{
    private $eventName;
    private $text;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($eventName, $text)
    {
        parent::__construct();
        $this->eventName = $eventName;
        $this->text = $text;
    }

    public function toSlack($notifiable)
    {
        $content = "`{$this->notified_at}` | `{$this->eventName}` | {$this->text}";

        return (new SlackMessage)
            ->http(static::HTTP_OPTIONS)
            ->to(config('payments.notification_channel'))
            ->content($content);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'eventName' => $this->eventName,
            'text' => $this->text,
        ];
    }
}
