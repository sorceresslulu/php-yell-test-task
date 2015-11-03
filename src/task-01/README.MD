Код тайпхинт-френдли для конкретных классов (конкретные Drawer'ы имеют дело с CircleFigure/RectangleFigure, а не с общей абстракцией FigureInterface)


Для добавления нового типа фигуры необходимо:

- Создать новую фигуру в `FigureTask\Figure\Figures\{FigureName}\{FigureName}Figure`

- При необходимости дополнительных аргументов (кроме стандартных цветы/обводки) добавить класс *Attributes

- Создать _фабрику фигуры из массива_ в `FigureTask\Figure\Factory\ByFigure\{FigureName}`

- Добавить рендер фигуры в `FigureTask\Drawer\Drawers\Image\ByFigure`, добавить новую фабрику в `FigureTask\Drawer\Drawers\Image\ImageDrawerFactory`
 
- Добавить рендер фигуры в `FigureTask\Drawer\Drawers\Points\ByFigure`, добавить новую фабрику в `FigureTask\Drawer\Drawers\Points\PointsDrawerFactory` 