import { Dom } from "../../../dom/dom.js";
import { isNormalNode } from "./is-normal-node.js";
import { hasSameStyle, hasSameStyleKeys } from "./has-same-style.js";
/**
 * Checks if an item is suitable for applying a commit. The element suits us if it
 *  - has the same styles as in the commit (commitStyle.options.style)
 *  - has the same tag as in the commit (commitStyle.options.element)
 *
 * @param commitStyle - style commit
 * @param elm - checked item
 * @param strict - strict mode - false - the default tag is suitable for us if it is also in the commit
 * @private
 */
export function isSuitElement(commitStyle, elm, strict) {
    if (!elm) {
        return false;
    }
    const { element, elementIsDefault, options } = commitStyle;
    const elmHasSameStyle = Boolean(options.attributes?.style &&
        hasSameStyle(elm, options.attributes.style));
    const elmIsSame = elm.nodeName.toLowerCase() === element ||
        (Dom.isList(elm) && commitStyle.elementIsList);
    if (((!elementIsDefault || !strict) && elmIsSame) ||
        (elmHasSameStyle && isNormalNode(elm) && !commitStyle.elementIsList)) {
        return true;
    }
    return Boolean(!elmIsSame && !strict && elementIsDefault && Dom.isInlineBlock(elm));
}
export function findSuitClosest(commitStyle, element, root) {
    return Dom.closest(element, node => isSuitElement(commitStyle, node, true), root);
}
/**
 * Inside the parent element there is a block with the same styles
 * @example
 * For selection:
 * ```html
 * <p>|test<strong>test</strong>|</p>
 * ```
 * Apply `{element:'strong'}`
 */
export function isSameStyleChild(commitStyle, elm) {
    const { element, options } = commitStyle;
    if (!elm || !isNormalNode(elm)) {
        return false;
    }
    const elmIsSame = elm.nodeName.toLowerCase() === element;
    const elmHasSameStyle = Boolean(options.attributes?.style &&
        hasSameStyleKeys(elm, options.attributes?.style));
    return elmIsSame && elmHasSameStyle;
}
