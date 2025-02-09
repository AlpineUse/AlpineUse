<div>
    <div class="relative leading-6 text-center">
        <form x-init="$wire.$watch('otp', value => {
            if (value.length === 6) {
                $wire.submit();
            }
        })" x-data="{
            autoSubmit: false,
            isNumber(value) {
                if (value.match(/^[0-9]$/g)) {
                    return true;
                }
            },
            handleSubmit() {
                $wire.otp = [...Array(6)].map((_, i) => $refs['num' + (i + 1)].value || '').join('');
            },
            handlePaste(e) {
                let num = e.clipboardData.getData('text/plain').trim();
        
                if (num.length === 6 && num.match(/^[0-9]+$/g)) {
                    $refs.num1.value = num.charAt(0);
                    $refs.num2.value = num.charAt(1);
                    $refs.num3.value = num.charAt(2);
                    $refs.num4.value = num.charAt(3);
                    $refs.num5.value = num.charAt(4);
                    $refs.num6.value = num.charAt(5);
        
                    $refs.num6.focus();
                    $wire.submit();
                }
            },
        }" x-ref="OtpForm" wire:submit="submit">
            <div class="inline-flex flex-row justify-center items-center w-full text-dark dark:text-light gap-x-2.5">
                <input wire:model="otp" hidden />
                <input x-ref="num1"
                    x-on:input.change="() => { isNumber($refs.num1.value) ? $refs.num2.focus() : $refs.num1.value = '' }"
                    x-on:paste="handlePaste" type="text" id="num1" name="num1" maxlength="1" autofocus
                    class="block w-10 px-1.5 py-2.5 text-center border rounded-lg border-secondary-light/50 dark:border-secondary-dark/50 text-sm/6 placeholder-secondary-light focus:border-secondary-light focus:ring-3 focus:ring-secondary-light/50 dark:border-zinc-600 dark:bg-transparent dark:placeholder-zinc-400 dark:focus:border-secondary-light" />
                <input x-ref="num2"
                    x-on:input.change="() => { isNumber($refs.num2.value) ? $refs.num3.focus() : $refs.num2.value = '' }"
                    x-on:keydown.backspace="() => { $refs.num2.value === '' ? $refs.num1.focus() : null }"
                    x-on:paste="handlePaste" type="text" id="num2" name="num2" maxlength="1"
                    class="block w-10 px-1.5 py-2.5 text-center border rounded-lg border-secondary-light/50 dark:border-secondary-dark/50 text-sm/6 placeholder-secondary-light focus:border-secondary-light focus:ring-3 focus:ring-secondary-light/50 dark:border-zinc-600 dark:bg-transparent dark:placeholder-zinc-400 dark:focus:border-secondary-light" />
                <input x-ref="num3"
                    x-on:input.change="() => { isNumber($refs.num3.value) ? $refs.num4.focus() : $refs.num3.value = '' }"
                    x-on:keydown.backspace="() => { $refs.num3.value === '' ? $refs.num2.focus() : null }"
                    x-on:paste="handlePaste" type="text" id="num3" name="num3" maxlength="1"
                    class="block w-10 px-1.5 py-2.5 text-center border rounded-lg border-secondary-light/50 dark:border-secondary-dark/50 text-sm/6 placeholder-secondary-light focus:border-secondary-light focus:ring-3 focus:ring-secondary-light/50 dark:border-zinc-600 dark:bg-transparent dark:placeholder-zinc-400 dark:focus:border-secondary-light" />
                <input x-ref="num4"
                    x-on:input.change="() => { isNumber($refs.num4.value) ? $refs.num5.focus() : $refs.num4.value = '' }"
                    x-on:keydown.backspace="() => { $refs.num4.value === '' ? $refs.num3.focus() : null }"
                    x-on:paste="handlePaste" type="text" id="num4" name="num4" maxlength="1"
                    class="block w-10 px-1.5 py-2.5 text-center border rounded-lg border-secondary-light/50 dark:border-secondary-dark/50 text-sm/6 placeholder-secondary-light focus:border-secondary-light focus:ring-3 focus:ring-secondary-light/50 dark:border-zinc-600 dark:bg-transparent dark:placeholder-zinc-400 dark:focus:border-secondary-light" />
                <input x-ref="num5"
                    x-on:input.change="() => { isNumber($refs.num5.value) ? $refs.num6.focus() : $refs.num5.value = '' }"
                    x-on:keydown.backspace="() => { $refs.num5.value === '' ? $refs.num4.focus() : null }"
                    x-on:paste="handlePaste" type="text" id="num5" name="num5" maxlength="1"
                    class="block w-10 px-1.5 py-2.5 text-center border rounded-lg border-secondary-light/50 dark:border-secondary-dark/50 text-sm/6 placeholder-secondary-light focus:border-secondary-light focus:ring-3 focus:ring-secondary-light/50 dark:border-zinc-600 dark:bg-transparent dark:placeholder-zinc-400 dark:focus:border-secondary-light" />
                <input x-ref="num6"
                    x-on:input.change="() => { isNumber($refs.num6.value) ? handleSubmit() : $refs.num6.value = '' }"
                    x-on:keydown.backspace="() => { $refs.num6.value === '' ? $refs.num5.focus() : null }"
                    x-on:paste="handlePaste" type="text" id="num6" name="num6" maxlength="1"
                    class="block w-10 px-1.5 py-2.5 text-center border rounded-lg border-secondary-light/50 dark:border-secondary-dark/50 text-sm/6 placeholder-secondary-light focus:border-secondary-light focus:ring-3 focus:ring-secondary-light/50 dark:border-zinc-600 dark:bg-transparent dark:placeholder-zinc-400 dark:focus:border-secondary-light" />
            </div>

            <div class="flex flex-col w-full px-5">
                @error('otp')
                    <span class="text-start text-danger-light dark:text-danger-dark">{{ $message }}</span>
                @enderror
            </div>

            <div class="px-2">
                <x-elements.button type="submit" size="sm" class="mt-2 rounded-lg" primary>
                    Verify
                </x-elements.button>
            </div>
            
        </form>
    </div>
</div>
