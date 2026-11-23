<?php

class Person {

    private Wallet $wallet;
    private Keys $keys;
    private Smartphone $smartphone;
    private TransportCard $transportCard;

    public function __construct(
        Wallet $wallet,
        Keys $keys,
        Smartphone $smartphone,
        TransportCard $transportCard
    ) {
        $this->wallet = $wallet;
        $this->keys = $keys;
        $this->smartphone = $smartphone;
        $this->transportCard = $transportCard;
    }

    public function leaveHome(): void {
        $this->keys->openDoor();
    }
    public function makePayment(): void {
        $this->wallet->pay();
    }

    public function makeCall(): void {
        $this->smartphone->makeCall();
    }

    public function usePublicTransport(): void {
        $this->transportCard->useCard();
    }
}