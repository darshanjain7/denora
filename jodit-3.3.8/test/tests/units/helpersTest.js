describe('Test helpers', function() {
	describe('Normalizers', function() {
		describe('normalizeKeyAliases', function() {
			it('Should convert some hotkeys to normal', function() {
				const hotkeys = {
					'cmd+ alt+s': 'alt+meta+s',
					'cmd++': '++meta',
					'ctrl+ alt+s': 'alt+control+s',
					' command+s': 'meta+s',
					'alt+s+ctrl': 'alt+control+s',
					'shift+ctrl+cmd+D': 'control+d+meta+shift',
					'meta+windows+win+ctrl+cmd': 'control+meta',
					'cmd+ alt+ shift ': 'alt+meta+shift',
					'return + esc ': 'enter+escape'
				};

				Object.keys(hotkeys).forEach(function(key) {
					expect(hotkeys[key]).to.be.equal(Jodit.modules.Helpers.normalizeKeyAliases(key));
				});
			});
		});

		describe('normalizePath', function() {
			it('Should normalize slashes and join some parts', function() {
				const variants = {
					'/data/test/': ['/data/test/'],
					'data/test/': ['data/test/'],
					'data/test': ['data', 'test', ''],
					'test/test/': ['test//test//'],
					'https://xdsoft.net/jodit/connector/index.html': ['https://xdsoft.net', 'jodit/connector/', '/index.html'],
					'https://xdsoft.net/jodit/connector/index2.html': ['https://xdsoft.net\\jodit/connector/', '/index2.html'],
				};

				Object.keys(variants).forEach(function(key) {
					expect(key).to.be.equal(Jodit.modules.Helpers.normalizePath.apply(null, variants[key]));
				});
			});
		});
	});

	describe('Checkers', function() {
		describe('isInt', function() {
			it('Should check value is int or not', function() {
				const values = [
					'cmd+ alt+s', false,
					'+1', true,
					'-1', true,
					'-1dddd', false,
					'10', true,
					'10.1', false,
					'10e10', true,
					'10e10', true,
					10, true,
					11.33, false
				];

				for (let i = 0; i < values.length; i += 2) {
					expect(values[i + 1]).to.be.equal(Jodit.modules.Helpers.isInt(values[i]));
				}
			});
		});

		describe('isNumeric', function() {
			it('Should check value is int or not', function() {
				const values = [
					'cmd+ alt+s', false,
					'+1', true,
					'-1', true,
					'-1000.333', true,
					'-1dddd', false,
					's1999999', false,
					' -1 ', false,
					'10', true,
					'10.1', true,
					'12312310.1243234', true,
					'10e10', true,
					'10e10', true,
					10, true,
					11.33, true
				];

				for (let i = 0; i < values.length; i += 2) {
					expect(values[i + 1]).to.be.equal(Jodit.modules.Helpers.isNumeric(values[i]));
				}
			});
		});
	});

	describe('String', function() {
		describe('18n', function() {
			const i18n = Jodit.modules.Helpers.i18n;

			describe('Put defined sentence', function() {
				it('Should replace it on defined language', function() {
					const values = [
						'Type something', '???????????????? ??????-????????', 'ru',
						'rename', '??????????????????????????', 'ru',
						'Rename', '??????????????????????????', 'ru',
						'About Jodit', '?????? ??????????', 'ar',
						'about Jodit', '?????? ??????????', 'ar',
						'British people', 'British people', 'ar',
					];

					for (let i = 0; i < values.length; i += 3) {
						expect(values[i + 1]).to.equal(i18n(values[i], [], {
							language: values[i + 2],
						}, true));
					}
				});

				describe('Put some information inside sentence', function() {
					it('Should put this information inside new sentence', function() {
						const values = [
							'Chars: %d', '????????????????: 1', 'ru', [1],
							'Select %s', '????????????????: Test', 'ru', ['Test'],
							'select %s', '????????????????: Test', 'ru', ['Test'],
							'Bla %d Bla %s', 'Bla 1 Bla boo', 'ru', [1, 'boo'],
							'Bla %d Bla %s', 'Bla 1 Bla boo', 'ru1', [1, 'boo'],
						];

						for (let i = 0; i < values.length; i += 4) {
							expect(values[i + 1]).to.equal(i18n(values[i], values[i + 3], {
								language: values[i + 2],
							}, true));
						}
					});
				});
			});

			describe('Debug mode', function() {
				it('Should show debug brackets for undefined keys', function() {
					const values = [
						'Type something', '???????????????? ??????-????????', 'ru',
						'About Jodit', '?????? ??????????', 'ar',
						'About Jodit', 'About Jodit', 'ar1',
						'British people', '{British people}', 'ar',
					];

					for (let i = 0; i < values.length; i += 3) {
						expect(values[i + 1]).to.equal(i18n(values[i], [], {
							language: values[i + 2],
							debugLanguage: true
						}, true));
					}
				});
			});

			describe('Define i18n property inside input options', function() {
				it('Should use it', function() {
					const values = [
						'Type something', '????????????', 'ru',
						'About Jodit', '??????????', 'ar',
						'British people', 'Bond', 'ar',
					];

					const opt = {
						'ru': {
							'Type something': '????????????'
						},
						'ar': {
							'About Jodit': '??????????',
							'British people': 'Bond',
						},
					};

					for (let i = 0; i < values.length; i += 3) {
						expect(values[i + 1]).to.equal(i18n(values[i], [], {
							language: values[i + 2],
							i18n: opt,
							debugLanguage: true
						}, true));
					}
				});
			});
		});

	});
});
