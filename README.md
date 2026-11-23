# S3.02 - Patrons de disseny

## Descripció

En aquesta tasca es treballen dos patrons de disseny mitjançant exercicis pràctics de programació orientada a objectes amb PHP.

- **Singleton:** implementació d'una única instància de la classe `Tigger`, amb un comptador per registrar les vegades que rugeix.
- **Dependency Injection:** aplicació de la injecció de dependències mitjançant el constructor de la classe `Person`, que rep els objectes que necessita des de fora.

## Tecnologies

- PHP 8.2
- Visual Studio Code
- XAMPP

## Instal·lació

1. Clonar aquest repositori:

   ```bash
   git clone URL_DEL_REPOSITORI
   ```

2. Accedir a la carpeta del projecte.
3. Obrir els fitxers amb Visual Studio Code.
4. Executar els exercicis des de la terminal:

   **Singleton**
   ```bash
   php "Singleton/index.php"
   ```

   **Dependency Injection**
   ```bash
   php "Dependency Injection/index.php"
   ```

## Estructura del projecte

```text
Nivell I/
│
├── Singleton/
│   ├── Tigger.php
│   └── index.php
│
└── Dependency Injection/
    ├── Wallet.php
    ├── Keys.php
    ├── Smartphone.php
    ├── TransportCard.php
    ├── Person.php
    └── index.php
```

## Autor

Jordi Artigues
