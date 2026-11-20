# Ejercicios de Diseño de Interfaces Web – resumen y respuestas

Cada ejercicio práctico tiene su archivo HTML en esta carpeta. Aquí van las respuestas teóricas y el mapa de ejercicios.

---

## Diseño001 – Comunicación visual
| Ejercicio | Dónde / respuesta |
|---|---|
| Práctica 1: layout LOGO · NAV · ASIDE · BODY · ASIDE · FOOTER | `001_practica1_layout.html` (CSS Grid con `grid-template-areas`) |
| Test A / Test B: titular la imagen sin pistas | Ejercicio de clase para hacer con compañeros: un icono de persona sentada con la cabeza en la mano suele leerse como *"pensar / cansancio / duda"*; el rayo, como *"energía / peligro eléctrico / rapidez"*. Es una lectura **cultural**: lo importante es comparar los títulos de varias personas. |
| Prueba de 3 segundos (jerarquía) | Orden esperado en el cartel: 1º círculo + "GRAN TITULAR", 2º texto, 3º botón de acción. |
| Análisis y diseño (Canva / Marvel App) | Proyecto propio: define público, objetivo y mapa de secciones (análisis) y maqueta en Canva/Marvel (diseño). |
| Evaluar daltonismo / contraste / gris | Pasa tu diseño por colorblindnesstest.org, comprueba contraste ≥ 4.5:1 y mira una versión en escala de grises: la jerarquía debe mantenerse. |

## Diseño002 – Composición, logo y monograma
- **Actividad 1:** logo + monograma → `logo.svg` y `monograma.svg` (vectoriales, escalables, funcionan a una tinta). Cámbialos por las iniciales/marca que quieras.
- **Actividad 2:** insertar el logo en la parte superior derecha del archivo con h1 y h2 → `001_002_logo_en_pagina.html`.
- Preguntas de reflexión del PDF (qué color eliges, card sorting…): son dinámicas de clase, sin respuesta única.

## Diseño003 – HTML
- Tablas (colspan/rowspan), layouts con tabla, responsive y float → `003_html_tablas_y_float.html`.
- **¿Qué es SGML?** *Standard Generalized Markup Language*: metalenguaje (estándar **ISO 8879**, 1986) para definir lenguajes de marcado. HTML hasta la v4 fue una aplicación de SGML; XHTML pasó a XML.
- **Número de etiquetas:** HTML 4.01 ≈ 80-90 elementos; HTML Living Standard > 100 (según se cuenten los obsoletos).
- **Etiquetas vigentes (las más usadas):** `html, head, meta, title, link, style, script, body, header, nav, main, section, article, aside, footer, h1-h6, p, a, img, figure, figcaption, ul, ol, li, table, tr, th, td, form, input, label, button, textarea, select, div, span, strong, em, br, video, audio`.
  Obsoletas: `font, center, marquee, frame, b/i solo con valor semántico…` (`<b>`/`<i>` siguen existiendo pero preferir `strong`/`em`).
- `<i>` ≈ `<em>` (énfasis) y `<b>` ≈ `<strong>` (importancia) **visualmente**; semánticamente es mejor usar em/strong.

## Diseño004 – CSS (`004_css_ejercicios.html`)
**Problema 1**
1. `.rojo` + `#naranja` → **rojo** (`!important`)
2. `<p class="rojo"><span>` → **rojo**
3. `#verde` → **verde**
4. `.rosa` + `#naranja` → **naranja** (id > clase)
5. `style="color:blue"` → **azul** (en línea > clase)
La regla `p .rojo` no se aplica nunca: ningún `.rojo` es *descendiente* de un `<p>`.

**Problema 3** (con el HTML tal cual)
- Párrafo 1 → **azul**; Párrafo 2 → **azul** (`#lista p` = 1-0-1 gana)
- Párrafo 3 → **rojo** (`mark1,` lleva coma pegada y no coincide con `.mark1`; coincide `.mark`)
- Párrafo 4 → **verde** (misma especificidad: gana la última regla `.mark1`)
- Solución recomendada: bajar la especificidad del padre (`:where(.lista) p {}`), no usar `!important`.

**Otras preguntas**
- `5em` = 5 × 16 = **80px**.
- Si cambias el font-size de la raíz a 21px, **sí** cambian los `rem` (1.3rem = 27.3px).
- Con padre a 1.2em: `1.3em` = 24.96px, `1.3rem` = 20.8px.
- Un elemento **en línea** no admite `width/height`; uno **en bloque** sí. `display:none` lo quita del flujo y del árbol de renderizado (como si no estuviera).
- Cajas 70%/30% con padding: usar `box-sizing: border-box` (o `calc`).
- Contact card: `margin-top: -40px` en la imagen la sube sobre la cabecera.
- z-index padre/hijo: hijo con `z-index:-1` y padre `position:relative` **sin** z-index → el hijo queda detrás del fondo del padre.

## Diseño005 – CSS miscelánea (`005_css_miscelanea.html`, `005_menu_responsive.html`)
| Pregunta del PDF | Respuesta |
|---|---|
| Amarillo | `rgb(255,255,0)` · `#FFFF00` |
| Naranja | `rgb(255,165,0)` · `#FFA500` |
| Rosado | `rgb(255,192,203)` · `#FFC0CB` |
| `rgb(125,125,125)` | gris medio (`#7D7D7D`) |
| Gris en hex | `#808080` |
| `hsl(0,100%,50%)` | rojo puro (tono 0°, saturación 100 %, luminosidad 50 %) |
| OKLCH | espacio de color perceptual `oklch(L C H)`; p. ej. `oklch(0.63 0.26 29)` ≈ rojo |
| `border-box` en `background-clip` ("XXXX???") | Sí existe: `border-box` es el valor **por defecto** (el fondo llega hasta el borde). El PDF lo marca porque se confunde con `background-origin`. |

Además: object-fit, cursor, gradientes en texto/borde, botón con imagen + degradado, transiciones (linear/ease/ease-in/ease-out/ease-in-out) y menú responsive solo con CSS+BEM.

## Diseño006 – Flexbox y Grid (`006_flexbox_grid.html`)
- `flex-basis: 300px; width: 100px` → el ítem mide **300px** (flex-basis tiene prioridad sobre width).
- `flex-shrink: 0` → el ítem **no cede** espacio: no se encoge y puede desbordar.
- `flex-flow: column wrap` → apila en columna y, cuando se llena la altura del contenedor, salta a otra columna (requiere altura fija).
- `order: 10` en el naranja + `row-reverse` → el naranja queda **a la izquierda** (es el último en orden y la fila se invierte).
- Centrar / esquinas: `margin: auto` en el ítem (o `justify-content` + `align-items`).
- `1fr 1fr 2fr` → 25 % / 25 % / 50 % del espacio disponible.
- `repeat(auto-fill, minmax(100px, 200px))` → crea tantas columnas de 100–200px como quepan; `auto-fit` hace lo mismo pero **colapsa las pistas vacías** y estira las columnas llenas.
- Celda 3 con `grid-column: 5/7` → crea una columna implícita y deja huecos; `grid-auto-flow: dense` los rellena.
- Alineación de un ítem: `place-self: <align-self> <justify-self>`; el nº 5 → `place-self: center center`.
- Media queries con flex y con grid → al final de `006_flexbox_grid.html`.

---
**Nota:** los PDFs solo muestran capturas de algunos enunciados (layouts de tablas 5-8, formulario, galería…), así que esas partes son una interpretación fiel de lo que se ve, no una copia píxel a píxel. Las imágenes originales (la "Z", los caballos, etc.) no estaban disponibles; las sustituí por SVG/gradientes para que todo funcione sin archivos externos.
