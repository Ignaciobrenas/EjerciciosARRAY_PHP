
# 📄 README – Práctica Arrays + Tienda Comics

## 🧩 Práctica 3 – Arrays en PHP Ignacio Breñas Muñoz 1 DAW STUCOM 

En esta práctica he desarrollado los **8 ejercicios de arrays** en el archivo `ArraysPHP_IgnacioBreñasMuñoz_DAW1.php`.  
Todos los ejercicios están **comentados** para explicar las decisiones y el funcionamiento:

1. **Array asociativo** (persona) y muestra de **valores** con `foreach`.
2. Muestra de **clave + valor** del mismo array.
3. **Modificación** de la edad a **24** y reimpresión del array.
4. **Eliminación** de la clave `ciudad` y salida con `var_dump`.
5. **explode()** a partir de `"a,b,c,d,e,f"` y **orden descendente** (`rsort`).
6. **Notas** en array asociativo y **ordenado** de mayor a menor (`arsort`).
7. **Media** con **2 decimales** y **alumnos por encima** de la media.
8. **Nota máxima** con su **alumno** usando `max()` y `array_search()`.

> Archivo: `ArraysPHP_IgnacioBreñasMuñoz_DAW1.php`.

---

## 🏪 Tienda Comics – Inventario y mejoras

Para el ejercicio de la tienda trabajé a partir de `miTiendaComics.php`.  
Entrego dos versiones:

- `TiendaComics_1.0` → **Tal y como se me entregó.**
- `TiendaComics_2.0` → **Con las correcciones y mejoras pedidas.**


## 🔢 Diferencias entre 1.0 y 2.0

### ✅ Versión 1.0 (estado inicial)

- `mostrarComicsEnTabla()` **funciona** y pinta la tabla.
- `mostrarValorAlmacen()` está **pendiente** (sin implementar).
- `aplicarDescuentoManga()` **solo recorre la categoría** `accion` y aplica 30% si `idioma == 'Japonés'`.  
  Eso deja **sin descuento** los mangas en otras categorías (p. ej. `suspense_terror`).  
  Además, **modifica solo una parte** del inventario; si se añaden más categorías, no se aplicaría el descuento ahí.

**Resumen:** se ve la tabla y el flujo “antes/después” del descuento, pero **el valor del almacén no se calcula** y **el descuento es parcial** (limitado a una categoría).

---

### 🚀 Versión 2.0 (mejoras aplicadas)

**Archivo:** `miTiendaComics.php`

1. **Implementación de `mostrarValorAlmacen()`**
   - Recorre **todas las categorías** y **todos los cómics**.
   - Suma `precio * stock` en una variable acumulada `$valor`.
   - Muestra: `Total valor almacen: <importe>`.
   - Esto permite ver el **impacto real** del descuento en el total del inventario.

2. **Reescritura de `aplicarDescuentoManga()`**
   - Ahora recorre **todo el inventario**:  
     ```php
     foreach ($inventario as $categoria => &$comics) {
         foreach ($comics as &$comic) {
             if ($comic['idioma'] == 'Japonés') {
                 $comic['precio'] = $comic['precio'] * 0.7;
             }
         }
     }
     ```
   - Aplica **30% de descuento** a **cualquier cómic** cuyo `idioma` sea `'Japonés'`, esté en la categoría que esté.
   - Uso de **referencias (`&`)** para asegurarnos de **actualizar** el array original in-place.
   - La función ahora es **genérica y escalable**: si mañana añado `fantasia`, `scifi`, etc., el descuento se sigue aplicando correctamente.

3. **Salida ordenada del flujo**
   - Muestro tabla y valor **antes** del descuento; luego **aplico** el descuento; y finalmente **muestro** la tabla y el valor **después**.  
   - Esto deja claro el **antes/después** tanto en **precios unitarios** como en el **valor total** del almacén.

---

## 🆚 Resumen rápido

- **1.0**
  - ❌ `mostrarValorAlmacen()` sin implementar.  
  - ⚠️ `aplicarDescuentoManga()` solo afecta a `accion`.  
  - ✔️ Tabla HTML correcta.

- **2.0**
  - ✔️ `mostrarValorAlmacen()` suma `precio * stock` de **todo** el inventario.  
  - ✔️ `aplicarDescuentoManga()` recorre **todas** las categorías y aplica **30%** si `idioma == 'Japonés'`.  
  - ✔️ Demostración clara **antes/después** (tabla + total).

---

## 📂 Archivos de la entrega

- `Arrays.php` – Ejercicios 1–8 comentados.
- `miTiendaComics.php` – Vercion corregida con los commits realizados 

- `README.md` – Este documento.

---
