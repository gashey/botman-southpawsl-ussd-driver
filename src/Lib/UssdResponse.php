<?php

namespace Gashey\BotmanSouthpawslUssdDriver\Lib;

class UssdResponse
{

    /**
     * RESPONSE TYPES:
     */
    /**
     * indicates that the application is ending the USSD session.
     */
    const END = 'END';

    /**
     * indicates a response in an already existing USSD session.
     */
    const CONTINUE = 'CONTINUE';
}
