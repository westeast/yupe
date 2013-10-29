<?php
interface TokenStorageInterface {
    public function save(User $user, $token, $type);
}