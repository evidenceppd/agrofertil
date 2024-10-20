/*!
 * Jodit Editor (https://xdsoft.net/jodit/)
 * Released under MIT see LICENSE.txt in the project root for license information.
 * Copyright (c) 2013-2023 Valeriy Chupurnov. All rights reserved. https://xdsoft.net
 */
import { Dom } from "../../../../../core/dom/dom.js";
import { INSEPARABLE_TAGS } from "../../../../../core/constants.js";
/**
 * @private
 */
export function fillEmptyParagraph(jodit, nodeElm, hadEffect) {
    if (jodit.o.cleanHTML.fillEmptyParagraph &&
        Dom.isBlock(nodeElm) &&
        Dom.isEmpty(nodeElm, INSEPARABLE_TAGS)) {
        const br = jodit.createInside.element('br');
        nodeElm.appendChild(br);
        return true;
    }
    return hadEffect;
}
