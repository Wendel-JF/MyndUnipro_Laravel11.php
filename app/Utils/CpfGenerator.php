<?php

namespace App\Utils;

class CpfGenerator
{
    public static function gerarCpfValido(): string
    {
        $noveDigitos = '';

        for ($i = 0; $i < 9; $i++) {
            $noveDigitos .= random_int(0, 9);
        }

        $primeiroDigito = self::calcularDigitoVerificador($noveDigitos);
        $dezDigitos = $noveDigitos . $primeiroDigito;
        $segundoDigito = self::calcularDigitoVerificador($dezDigitos);

        return $noveDigitos . $primeiroDigito . $segundoDigito;
    }

    private static function calcularDigitoVerificador(string $base): int
    {
        $soma = 0;
        $tamanho = strlen($base) + 1;

        for ($i = 0; $i < strlen($base); $i++) {
            $soma += $base[$i] * ($tamanho - $i);
        }

        $resto = $soma % 11;
        return $resto < 2 ? 0 : 11 - $resto;
    }
}