/*!
 * Jodit Editor (https://xdsoft.net/jodit/)
 * Licensed under GNU General Public License version 2 or later or a commercial license or MIT;
 * For GPL see LICENSE-GPL.txt in the project root for license information.
 * For MIT see LICENSE-MIT.txt in the project root for license information.
 * For commercial licenses see https://xdsoft.net/jodit/commercial/
 * Copyright (c) 2013-2019 Valeriy Chupurnov. All rights reserved. https://xdsoft.net
 */

import { IDictionary } from '../types';

import ar from './ar';
import cs_cz from './cs_cz';
import de from './de';
import en from './en';
import es from './es';
import fr from './fr';
import he from './he';
import hu from './hu';
import id from './id';
import it from './it';
import nl from './nl';
import pl from './pl';
import pt_br from './pt_br';
import ru from './ru';
import tr from './tr';
import zh_cn from './zh_cn';
import zh_tw from './zh_tw';

const exp: IDictionary<IDictionary<string>> = {
	ar,
	cs_cz,
	de,
	en,
	es,
	fr,
	he,
	hu,
	id,
	it,
	nl,
	pl,
	pt_br,
	ru,
	tr,
	zh_cn,
	zh_tw
};

/* Unpack array to hash */
const
	get = (value: IDictionary) => value.default || value,
	hashLang: IDictionary = {};

if (Array.isArray(get(en))) {
	get(en).forEach((key: string, index: number) => {
		hashLang[index] = key;
	});
}

Object.keys(exp).forEach((lang: string) => {
	const list: unknown = get(exp[lang]);

	if (Array.isArray(list)) {
		exp[lang] = {};

		list.forEach((value: string, index: number) => {
			exp[lang][hashLang[index]] = value;
		});
	}
});

export default exp;
