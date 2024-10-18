/*!
 * Jodit Editor (https://xdsoft.net/jodit/)
 * Released under MIT see LICENSE.txt in the project root for license information.
 * Copyright (c) 2013-2023 Valeriy Chupurnov. All rights reserved. https://xdsoft.net
 */
import type { CommitMode, IJodit, ICommitStyle } from "../../../../types";
/**
 * Toggles attributes
 * @private
 */
export declare function toggleAttributes(commitStyle: ICommitStyle, elm: HTMLElement, jodit: IJodit, mode: CommitMode, dry?: boolean): CommitMode;
