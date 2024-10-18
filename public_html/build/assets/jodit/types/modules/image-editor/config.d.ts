/*!
 * Jodit Editor (https://xdsoft.net/jodit/)
 * Released under MIT see LICENSE.txt in the project root for license information.
 * Copyright (c) 2013-2023 Valeriy Chupurnov. All rights reserved. https://xdsoft.net
 */
import type { ImageEditorOptions } from "../../types";
declare module 'jodit/config' {
    interface Config {
        imageeditor: ImageEditorOptions;
    }
}
